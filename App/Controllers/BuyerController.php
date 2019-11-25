<?php

namespace App\Controllers;

use \Core\View;

/**
 * Buyer controller
 *
 * PHP version 7.2
 */
class BuyerController extends \Core\Controller
{
   public function index()
   {
     $data['title'] = "Buyer List";
     View::render('buyer.php', $data);
    }
}
