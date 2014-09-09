<html> 
	<head>
		<h1>Adicionar Despesa</h1>
	</head>

	<body>
		<form name='add' method="post" action="/savemoney/despesa/add">
			<table border="1">
				<tr>
					<td>Descrição: <?php echo $this->tag->textField(array('descricao')); ?></td>
				</tr>
				<tr>
					<td>Valor: <?php echo $this->tag->textField(array('valor')); ?></td>
				</tr>
			</table>
			<?php echo $this->tag->submitButton(array('Adicionar')); ?>
		</form>
	</body>
	<table>
		<?php foreach ($result as $desp) { ?>
			<tr>
				<td>Descrição: <a href="/savemoney/despesa/update/<?php echo $desp->id; ?>"><?php echo $desp->descricao; ?></a></td> 
				<td>R$<?php echo $desp->valor; ?></td>
			</tr>
		<?php } ?>
	</table>

</html>
