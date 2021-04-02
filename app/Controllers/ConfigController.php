<?php

$url = CONFIG."/configs.json";
if($_POST){

    try {
        $email = $_POST['email'];
        if(filter_var($email, FILTER_VALIDATE_EMAIL)===false){
            throw new Exception($email);
        }

        $country = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_SPECIAL_CHARS);
        $street = filter_input(INPUT_POST, 'street', FILTER_SANITIZE_SPECIAL_CHARS);
        $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_SPECIAL_CHARS);
        $mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

        $formdata = [
            'email'=> $email,
            'country'=> $country,
            'street'=> $street,
            'mobile'=> $mobile,
            'city' => $city
        ];
        $json = json_encode($formdata);
        file_put_contents($url, $json);
        header('Location: /contacts');
        exit;

    } catch (Exception $e){
        echo "Caught Exception";
    }
}

$address = config('configs');

$title = 'Edit Config';

render('config/index', compact('title', 'address'));
