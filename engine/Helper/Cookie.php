<?php
/**
 * Created by PhpStorm.
 * User: HUMANIK
 * Date: 09.02.2018
 * Time: 17:24
 */

namespace Engine\Helper;


class Cookie
{
    /**
     * @param $key
     * @param $value
     * @param int $time
     */
    public function set($key, $value, $time = 31536000)
    {
        setcookie($key, $value, time() + $time, '/');
    }

    /**
     * @param $key
     * @return null
     */
    public static function get($key)
    {
        if (isset($_COOKIE[$key])) {
            return $_COOKIE[$key];
        }
        return null;
    }

    /**
     * @param $key
     */
    public static function delete($key)
    {
        if (isset($_COOKIE[$key])) {
            self::set($key, '', -3600);
            unset($_COOKIE[$key]);
        }
    }
}