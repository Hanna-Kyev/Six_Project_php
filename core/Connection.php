<?php

class Connection
{
    public $pdo;

    public function __construct(array $config)
    {
        try{
            $this->pdo = new PDO(
                $this->makeDsn($config['db']),
                $config['user'],
                $config['password'],
                $config['options'] 
            );
        } catch (PDOException $e){
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    private function makeDsn($config){
        $dsn = $config['driver'] . ':';
        unset($config['driver']);
        foreach ($config as $key => $value) {
            $dsn .= $key . '=' . $value . ';';
        }
        return substr($dsn, 0, -1);
    }
}