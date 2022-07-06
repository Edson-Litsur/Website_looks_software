<?php
require_once "includes/headerlogin.php";
//require_once "registrar_con.php";
require_once "../Controllers/Site_contr.php";
?>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(Login/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Registra-se
					</span>
				</div>

				<form class="login100-form validate-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Nome em falta">
						<span class="label-input100">Nome</span>
						<input class="input100" type="text" name="nome" placeholder="Insira o deu nome">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Usuario em falta">
						<span class="label-input100">Usuario</span>
						<input class="input100" type="text" name="usuario" placeholder="Insira o usuariio">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Email em falta">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="insira o seu email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Palavra-passe em falta">
						<span class="label-input100">Palavra-passe</span>
						<input class="input100" type="password" name="palavra_passe" placeholder="Insira a palavra-passe">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">

						<div>
							<a href="login.php" class="txt1">
								Entrar
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="registrar">
							Registrar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<?php
require_once "includes/footerlogin.php";
?>