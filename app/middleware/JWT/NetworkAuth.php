<?php

namespace Middleware\JWT;

use Firebase\JWT\JWT;
use Lib\Logging;
use Lib\Db;


class NetworkAuth
{
    /**
     * @param $request
     * @param $response
     * @param $next
     * @return mixed
     * @throws \Exception
     */
    public function __invoke($request, $response, $next)
    {
        $auth = $request->getHeader("Authorization");

        try {
            if (preg_match('/Bearer\s(\S+)/', $auth[0], $matches)) {
                $token = $matches[1];
                $payload = JWT::decode($token, JWT_SECRET, ['HS256']);

                if (is_object($payload)) {
                    $user = Db::getInstance()->Select('SELECT id FROM users WHERE phone = :phone',
                                            [
                                                'phone' => $payload->phone
                                            ]
                                        );
                    if ($user) {
                        $request = $request->withAttribute('network_auth', $payload);
                        return $next($request, $response);
                    } else {
                        $response->getBody()->write(json_encode(["status" => "not-found"]));
                        return $response->withStatus(NOT_FOUND);
                    }
                } else {
                    $response->getBody()->write(json_encode(['errcode' => NOT_AUTHORIZED, 'error' => "Not authorized"], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
                    return $response->withStatus(UNAUTHORIZED);
                }
            } else {
                $response->getBody()->write(json_encode(['errcode' => NOT_AUTHORIZED, 'error' => "Not authorized"], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
                return $response->withStatus(UNAUTHORIZED);
            }
        } catch (\PDOException $e) {
            Logging::getInstance()->db($e);

            $response->getBody()->write(json_encode(['errcode' => UNEXPECTED_ERROR, 'error' => "Server database error"], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));

            return $response->withStatus(INTERNAL_SERVER_ERROR);
        } catch (\Exception $e) {
            Logging::getInstance()->JWTlog($e, $auth);

            $response->getBody()->write(json_encode(['errcode' => NOT_AUTHORIZED, 'error' => "Not authorized"], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
            return $response->withStatus(UNAUTHORIZED);
        }
    }
}