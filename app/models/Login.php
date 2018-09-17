<?php

namespace Models;

use Lib\Functions;
use Lib\Validate;

class Login
{
    /**
     * @param $phone
     * @param $password
     * @return array|bool|mixed
     */
    public static function authExec($phone, $password)
    {
        try {
            $user = Validate::checkUserExist($phone);
            if (password_verify($password, $user['password'])) {
                return $user;
            }
            return false;
        } catch (\Exception $e) {

        }
    }


    /**
     * @param $phone
     * @param $password
     * @return bool|mixed
     */
    public static function authExecMatrix($phone, $password)
    {
        try {
            $url = MATRIX_SERVER . '/_matrix/client/r0/login';
            $curl_data = [
                'type' => 'm.login.password',
                'password' => $password,
                'identifier' => [
                    'type' => 'm.id.phone',
                    'country' => 'KZ',
                    'number' => $phone
                ]
            ];

            $auth = Functions::postQuery($url, $curl_data);

            if ($auth['error']) return false;
            return $auth;
        } catch (\Exception $e) {

        }
    }
}