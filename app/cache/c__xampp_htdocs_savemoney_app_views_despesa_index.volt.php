<html> 
	
	<head>
		<h1>SaveMoney</h1>
	</head>
	<body>
		<?php echo $this->tag->submitButton(array('Adicionar Despesas')); ?>
		<table border="1">
			<tr>
				<td>Descrição</td>
				<td>Valor</td>
			</tr>
			<?php foreach ($result as $despesa) { ?>
				<tr> 
					<td> <a href="/savemoney/despesa/update/<?php echo $despesa->id; ?>"><?php echo $despesa->descricao; ?></a></td> 
					<td>R$<?php echo $despesa->valor; ?></td>
					<td><a href="/savemoney/despesa/remove/<?php echo $despesa->id; ?>" onclick="removeDespesa()">X</a></td>
				</tr>
			<?php } ?>
		</table>

	</body>
</html>