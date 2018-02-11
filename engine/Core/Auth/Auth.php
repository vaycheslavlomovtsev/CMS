<?php
/**
 * Created by PhpStorm.
 * User: HUMANIK
 * Date: 09.02.2018
 * Time: 17:31
 */

namespace Engine\Core\Auth;

use Engine\Core\Cookie;

class Auth implements AuthInterface
{
    protected $authorized = false;
    protected $user;

    /**
     * @return bool
     */
    public function authorized()
    {
        return $this->authorized;
    }

    public function user()
    {
        return $this->user;
    }

    public function authorize($user)
    {
        Cookie::set('auth.authorized', true);
        Cookie::set('auth.user', $user);

        $this->authorized = true;
        $this->user = $user;
    }

    public function unAuthorize()
    {
        Cookie::delete('auth.authorized');
        Cookie::delete('auth.user');

        $this->authorized = false;
        $this->user = null;
    }

    public static function salt()
    {
        return (string)rand(10000000, 99999999);
    }

    public static function encryptPassword($password, $salt = '')
    {
        return hash('sha256', $password, $salt);
    }
}