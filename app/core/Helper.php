<?php

namespace IeCourse\core;

class Helper {

    public static function unlinkImage($path) {
        unlink($path);
    }

    public static function __callStatic($name, $arguments)
    {
        if ($name === 'redirect') {
            if (count($arguments) === 1) {
                header('Location: ' . $arguments[0]);
            } else {
                header('Refresh: ' . $arguments[1] . ';url=' . $arguments[0]);
            }
        } elseif ($name === 'view') {
            if (count($arguments) !== 1) {
                extract($arguments[1]);
            }
            require_once (VIEW . $arguments[0]);
        }
    }

    public static function handelImageName($name,$extinction) {
        $number = rand(1,1000);
        return $name . $number . '.' . $extinction;
    }

}
