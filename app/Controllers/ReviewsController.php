<?php

class ReviewsController
{
    public function index()    
    {       
        render('reviews/index', ['title'=>"This is class"]);
    }
}

// render('reviews/index');

// require_once VIEWS.'/reviews/index.php';