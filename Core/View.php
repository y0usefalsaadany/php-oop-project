<?php

namespace Core;

class View
{
    public static function load($viewFile, array $data = [])
    {
        extract($data);
        $file = "./Views/$viewFile.php";
        if (file_exists($file)) {
            require $file;
        } else {
            echo "this file $file not found";
        }
    }
}
