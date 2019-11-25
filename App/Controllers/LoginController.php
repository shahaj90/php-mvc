<?php

namespace App\Controllers;

use \Core\View;

/**
 * Login controller
 *
 * PHP version 7.2
 */
class LoginController extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function index()
    {
    	$data['title'] = "Login";
    	View::render('login.php', $data);
    }
}
