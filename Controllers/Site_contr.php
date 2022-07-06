<?php
//session_start();
require_once "../config/config.php";
require_once "../model/Site_model.php";
require_once "../controllers/Site_contr.php";
require_once "login_con.php";


$MySqlConexao  = new Conector;
$ConexaoBD     = $MySqlConexao->obter_cone();
$siteModel     = new Site($ConexaoBD);

if(isset($_POST['enviar'])){
    $nome     = $_POST['nome'];
    $email    = $_POST['email'];
    $tema     = $_POST['tema'];
    $mensagem = $_POST['mensagem'];

    $terminal = $siteModel->enviar_email($nome, $email, $tema, $mensagem);
}

if(isset($_POST['registrar'])){
    $nome          = $_POST['nome'];
    $usuario       = $_POST['usuario'];
    $email         = $_POST['email'];
    $palavra_passe = $_POST['palavra_passe'];

    $cadastrar= $siteModel->criar_registro($nome, $usuario, $email, $palavra_passe);

    //var_dump($cadastrar);

    if($cadastrar == true)
    {
        echo "<h2>Criado com sucesso</h2>";

    }else{
        echo "Nao Criado";
    }

}

$Pessoas = $siteModel->ler_cadastros();

if(isset($_GET['id_editar'])){
    $Pessoa  = $siteModel->ler_mais_cadastros($_GET['id_editar']);
}



$mensagens = $siteModel->ler_email();

$admins = $siteModel->ler_admin();

if(isset($_POST['salvar'])){
    $nome          = $_POST['nome'];
    $usuario       = $_POST['usuario'];
    $email         = $_POST['email'];
    $palavra_passe = $_POST['palavra_passe'];

    $cadastrar= $siteModel->criar_registro($nome, $usuario, $email, $palavra_passe);

}








//  if(isset($_POST['entrar'])){
//      if($_POST['usuario'] !="" || $_POST['palavra_passe'] !=""){
//          $usuario = $_POST['usuario'];
//          $palavra_passe = $_POST['palavra_passe'];

//          $logar = $siteModel->login($usuario,$palavra_passe);

//          if($logar > 0) {
//               $_SESSION['usuario'] = $fetch['id'];
//               header("location: shop.php");
//           } else{
//               echo "
//               <script>alert('Usuario ou palavra-passe invalida')</script>
//               <script>window.location = 'login.php'</script>
//               ";
//           }
//       }else{
//           echo "
//               <script>alert('Porfavor comple o campo em falta!')</script>
//               <script>window.location = 'login.php'</script>
//           ";
//       }

//  }
?>