<?php

require_once "conexao.php";

class Estoque extends Conexao{

    public function __construct()
    {
        parent::__construct();

    }

    public function mostrar(){  
        $sql = "SELECT * FROM produtos_poke ORDER BY id ASC";
        $sql = $this->db->prepare($sql);
        $sql->execute();
        $result = array();

        if($sql->rowCount() > 0){
            return  $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        }else{

            return 0; 
        }
    }
}