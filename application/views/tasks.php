<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Tasks - ToDo</title>

	<!-- Style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>lib/style/tasks.css" />

</head>
<body>
	
	<!-- [top] -->
		<header>
			<div class="logo"></div>
			<div class="new-task"></div>
		</header>
	<!-- [/top] -->

	<!-- [content] -->
		<section  class="content">

			<div class="task-all">

				<div class="task-option">
					<div class="task-option-in">
						<div class="done"></div>
						<a href="http://192.168.2.19/_todo/taskdone?id=1"><div class="cancel"></div></a>
					</div>
				</div>

				<div class="task normal">
					<div class="task-content">
						<h1>Title</h1>
						<p>
						   Lorem ipsum dolor sit amet, consectetur adipiscing
						   Cras lectus orci, accumsan fermentum tortor sed.
						</p>
					</div>
				</div>

			</div>

		</section>
	<!-- [/content] -->
	

	<!-- Scripts -->
	<script src="<?php echo base_url(); ?>lib/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>lib/js/tasks.js"></script>


</body>
</html>