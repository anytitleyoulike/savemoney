<html> 
	<head>
		<h1>Adicionar Usuario</h1>
	</head>

	<body>
		<form name='addUser' method="post" action="/savemoney/usuario/add">
			<table border="1">
				<tr>
					<td>Nome: <?php echo $this->tag->textField(array('nome')); ?></td>
				</tr>
				<tr>
					<td>Email: <?php echo $this->tag->textField(array('email')); ?></td>
				</tr>
				<tr>
					<td>Senha: <?php echo $this->tag->passwordField(array('senha')); ?></td>
				</tr>
			</table>
			<?php echo $this->tag->submitButton(array('Adicionar')); ?>
		</form>
	</body>

</html>