<?php

class Request
{
    public $data = [];
    public $query = [];

    public function __construct()
    {
        $this->data = $this->cleanInput($_REQUEST);
    }

    public function uri(){
        if(isset($_SERVER['REQUEST_URI']) && !empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'], '/');
        } 
    }

    private function cleanInput($data)
    {
        if (is_array($data)) {
            $cleaned = [];
            foreach ($data as $key => $value) {
                $cleaned[$key] = $this->cleanInput($value);
            }
            return $cleaned;
        }
        return trim(htmlspecialchars($data, ENT_QUOTES));
    }
} 