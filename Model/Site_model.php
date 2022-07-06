<?php

//require_once "../Config/Config.php"

class Site 
{
    public $id;
    public $nome;
    public $tema;
    public $email;
    public $mensagem;
    public $usuario;
    public $palavra_passe;
    private $ConexaoBD;


    public function __construct($ConexaoBD)
    {
        $this->ConexaoBD = $ConexaoBD;
    }

    public function enviar_email($nome, $email, $tema, $mensagem){
            $this->nome = $nome;
            $this->email= $email;
            $this->tema = $tema;
            $this->mensagem= $mensagem;

            $query = "INSERT INTO mensagem(nome, email, tema, mensagem)
            VALUES(:nome, :email, :tema, :mensagem);";
            $statment = $this->ConexaoBD->prepare($query);
            $statment->bindparam(':nome', $nome);
            $statment->bindparam(':email', $email);
            $statment->bindparam(':tema', $tema);
            $statment->bindparam(':mensagem', $mensagem);
            $statment->execute();

            return true;
        }

    public function ler_email(){
            $query = "SELECT * FROM mensagem;";
            $statment = $this->ConexaoBD->prepare($query);
            $statment->execute();

            $mensagens =$statment->fetchAll(PDO::FETCH_ASSOC);

            return $mensagens;
        }
    public function ler_admin(){
            $query = "SELECT * FROM tbladmin;";
            $statment = $this->ConexaoBD->prepare($query);
            $statment->execute();

            $admins =$statment->fetchAll(PDO::FETCH_ASSOC);

            return $admins;
        }


    public function login($usuario, $palavra_passe){
            $this->usuario       = $usuario;
            $this->palavra_passe = $palavra_passe;

            $query = "SELECT * FROM tblogin WHERE `usuario`=? AND `palavra_passe=`=?;";
            $statment = $this->ConexaoBD->prepare($query);
            $statment->execute(array($usuario, $palavra_passe));
            $row = $statment->rowCount();
			$fetch = $statment->fetch();
        }

        public function criar_registro($nome, $usuario, $email, $palavra_passe){
            $this->nome          = $nome;
            $this->usuario       = $usuario;
            $this->email         = $email;
            $this->palavra_passe = $palavra_passe;
    
            $query = 'INSERT INTO tblogin(nome, usuario, email, palavra_passe) 
            VALUES (:nome, :usuario, :email, :palavra_passe);';
            $statment = $this->ConexaoBD->prepare($query);
            $statment->bindparam(':nome', $nome);
            $statment->bindparam(':usuario', $usuario);
            $statment->bindparam(':email', $email);
            $statment->bindparam(':palavra_passe', $palavra_passe);
            $statment->execute();
    
            return true;
        }

        public function ler_cadastros(){
            $query = "SELECT * FROM tblogin;";
            $statment = $this->ConexaoBD->prepare($query);
            $statment->execute();

            $Pessoas = $statment->fetchAll(PDO::FETCH_ASSOC);

            return $Pessoas;
        }

        public function ler_mais_cadastros(){
            $query = "SELECT * FROM tblogin WHERE id = :id ;";
            $statment = $this->ConexaoBD->prepare($query);
            $statment->bindparam(':id', $id);
            $statment->execute();

            $Pessoa = $statment->fetch(PDO::FETCH_ASSOC);

            return $Pessoa;
        }

    // public function registrar($nome, $usuario, $email, $palavra_passe)
    //     {
    //         $this->nome          = $nome;
    //         $this->usuario       = $usuario;
    //         $this->email         = $email;
    //         $this->palavra_passe = $palavra_passe;

    //         $query = "INSERT INTO tblogin(nome, usuario, email, palavra_passe) 
    //                   VALUES( :nome, :usuario, :email, :palavra_passe);";

    //         $statment = $this->ConexaoDB->prepare($query); 
    //         $statment->bindparam(':nome', $nome);
    //         $statment->bindparam(':usuario', $usuario);
    //         $statment->bindparam(':email', $email);
    //         $statment->bindparam(':palavra_passe', $palavra_passe);
    //         $statment->execute();

    //         //var_dump($statment);

    //         return true;
    //     }



}



?>