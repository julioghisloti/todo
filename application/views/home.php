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
			<form action="tasks" method="post">

				<!-- Nome -->
				<input type="text" name="nome" placeholder="Nome"/>

				<!-- Senha -->
				<input type="password" name="senha" placeholder="Senha"/>

				<input type="submit" class="bts login" value="Entrar" />
				<a href="newuser" class="bts">Novo Usuario</a>

			</form>
		</section>
		
	</main>

	<!-- Scripts -->

	
</body>
</html>