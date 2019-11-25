<?php

namespace App\Controllers;

use \Core\View;

/**
 * Buyer controller
 *
 * PHP version 7.2
 */
class UserController extends \Core\Controller
{
   public function index()
   {
     $data['title'] = "User List";
     View::render('user.php', $data);
    }
}
