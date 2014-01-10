<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Login - ToDo</title>

	<!-- Style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>lib/style/home.css" />

</head>
<body>

	<main class="login-box">
		<header>
			<div class="logo"></div>
		</header>

		<section class="content">
			<form method="post" action="http://192.168.2.19/_todo/action_newuser">

				<!-- Nome -->
				<input type="text" name="nome" placeholder="Nome"/>

				<!-- Email -->
				<input type="email" name="email" placeholder="Email"/>

				<!-- Senha -->
				<input type="password" name="senha" placeholder="Senha"/>

				<input type="submit" class="bts login" value="Cadastrar" />
				<a href="welcome" class="bts">Login</a>

			</form>
		</section>
		
	</main>

	<!-- Scripts -->

	
</body>
</html>