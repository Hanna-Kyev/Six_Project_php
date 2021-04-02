<?php
require_once CORE.'/Controller.php';

class ErrorController extends Controller
{
    public function notFound()    
    {       
        $this->view->render('errors/index', ['title'=>"Not Found"]);
    }
}

// $title = '404 Page Not Found';
// $message = 'Something gone wrong!';

// http_response_code(404);
// // var_dump(http_response_code());

// render('errors/index', array(
//     'title' => $title,
//     'message' => $message
// ));