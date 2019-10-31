<?php

namespace app\security;

class Security
{
    public static function protectData($data)
    {
        $protectData = array();

        foreach ($data as $key => $value) {
            $protectData[$key] = self::replace_aps(htmlspecialchars(trim($value)));
        }

        return $protectData;
    }

    public static function replace_aps($string)
    {
        $string = str_replace("'", "&aps", $string);

        return $string;
    }
}