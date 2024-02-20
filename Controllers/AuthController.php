<?php


namespace Controllers;

use Core\View;

class AuthController
{
    public function login()
    {
        return View::load('login');
    }

    public function loginPost()
    {
        return "success";
    }
}
