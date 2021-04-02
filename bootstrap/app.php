<?php
require_once realpath(__DIR__ . '/../config') . '/app.php';

function render($template, $data=[], $layout='site'){
    if($data){        
        extract($data);
    }
    $template .= '.php';
    include_once VIEWS."/layouts/${layout}.php";
}

function config($mix){
    $url = CONFIG. "/".$mix. ".json";
    $jsonFile = file_get_contents($url);
    return json_decode($jsonFile, true);
}


require_once CORE. '/App.php';
$app = new App();
$app->run();