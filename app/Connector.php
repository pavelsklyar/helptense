<?php

namespace app;

class Connector
{
    public static function requireFolder($folder)
    {
        $explode_dir = explode("/", $folder);

        if (end($explode_dir))
            $folder .= '/';

        $requireList = array();
        $fileList = array();

        if ($catalog = opendir($folder)) {
            do {
                $file = readdir($catalog);
                if ($file != false) {
                    $requireList[] = $file;
                    $count = true;
                }
                else {
                    $count = false;
                }
            } while ($count);

            foreach ($requireList as $key => $file) {
                if ($file == '.' || $file == '..') {
                    unset($requireList[$key]);
                }
                else {
                    $requireList[$key] = $folder . $file;
                }
            }
            sort($requireList);
        }

        foreach ($requireList as $file) {
            if (is_dir($file)) {
                self::requireFolder($file);
            }
            else {
                $fileList[] = $file;
            }
        }

        foreach ($fileList as $file) {
            require_once "$file";
        }
    }
}