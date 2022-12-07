<?php

namespace App\Controllers;

use Src\Core\Core;
use Src\Core\Controller;

class HomeController extends Controller {
    
    public function index()
    {

        $this->loadTemplate('header');

        $this->loadview('home');

        $this->loadTemplate('footer');

    }

}