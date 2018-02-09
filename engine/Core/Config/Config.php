<?php
/**
 * Created by PhpStorm.
 * User: HUMANIK
 * Date: 08.02.2018
 * Time: 15:18
 */

namespace Engine\Core\Config;

class Config
{
    /**
     * @param $key
     * @param string $group
     * @return bool|mixed|null
     */
    public static function item($key, $group = 'main')
    {
        $groupItems = static::file($group);

        return isset($groupItems[$key]) ? $groupItems : null;
    }

    /**
     * @param $group
     * @return bool|mixed
     * @throws \Exception
     */
    public static function file($group)
    {
        $path = $_SERVER['DOCUMENT_ROOT'] . '/' . mb_strtolower(ENV) . '/Config/' . $group . '.php';
        if (file_exists($path)) {
            $items = require_once $path;

            if (is_array($items)) {
                return $items;
            } else {
                throw new \Exception(
                    sprintf('Config file <strong>$s</strong> is not valid array', $path)
                );
            }

        } else {
            throw  new \Exception(
                printf('Cannot load config from file, file <strong>$s</strong> does not exist', $path)
            );
        }
        return false;
    }
}