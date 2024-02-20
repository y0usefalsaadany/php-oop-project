<?php


namespace Controllers;

use Config\ProjectSettings;
use Core\View;

class HomeController
{
    public function home()
    {
        $appName = ProjectSettings::APP_NAME;
        $appTitle = "project";
        return View::load('home', [
            "appName" => $appName,
            "appTitle" => $appTitle
        ]);
    }
}
