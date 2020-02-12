<?php

class Conexao {

    protected $db;

    public function __construct(){
        $this->db = new PDO('mysql: host=localhost; dbname=pokemon;', 'root', '');   
        return $this->db;
    }

}