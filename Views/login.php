<?php
session_start();
require_once "includes/headerlogin.php";
require_once "../controllers/Site_contr.php";
////////require_once "login_con.php";////////////
?>

	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(Login//images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Entrar
					</span>
					</div>
				<?php if(isset($_SESSION['message'])): ?>
				<div class="alert alert-<?php echo $_SESSION['message']['alert'] ?> msg"><?php echo $_SESSION['message']['text'] ?></div>
			<script>
				(function() {
					setTimeout(function(){
						document.querySelector('.msg').remove();
					},3000)
				})();
			</script>
			<?php 
				endif;
				unset($_SESSION['message']);
			?>

				<form class="login100-form validate-form" action="login_con.php" method="POST">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Usuario em falta!">
						<span class="label-input100">Usuario</span>
						<input class="input100" type="text" name="usuario" placeholder="Insira o Usuario">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Palavra-passe em falta!">
						<span class="label-input100">Palavra-passe</span>
						<input class="input100" type="password" name="palavra_passe" placeholder="Insira a palavra-passe">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div>
							<a href="registrar.php" class="txt1">
								Registra-se.
							</a>
						</div>
						<div>
							<a href="#" class="txt1">
								Esqueceu palavra-passe
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="entrar">
							Entrar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php
require_once "includes/footerlogin.php";
?>

