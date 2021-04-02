<?php
require_once CORE.'/Controller.php';

class HomeController
{
    public function __construct()    
    {       
        // render('home/index', ['title'=>"This is class"]);
    }

    public function index(){
        render('home/index', ['title'=>"This is class"]);
    }
}

// render('home/index');

// include_once VIEWS.'/home/index.php';