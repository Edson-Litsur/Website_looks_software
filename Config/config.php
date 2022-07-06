<?php

class Conector{
    public $nomeServidor = "localhost";
    public $nomeBanco    = "site_db";
    public $usuario      = "root";
    public $palavra_passe= "";
    public $ConexaoBD;
    
    public function __construct(){
        try {
            $this->ConexaoBD = new PDO(
            "mysql:host=$this->nomeServidor;
            dbname=$this->nomeBanco",
            $this->usuario,
            $this->palavra_passe
            );
        } catch (PDOException $e) {
            echo "Falha na conexao!" .$e->getMessage();
        }
    }
    public function obter_cone(){
        return $this->ConexaoBD;
    }
}


?>