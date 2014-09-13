<html> 
	
	<head>
		<h1>SaveMoney</h1>
	</head>
	<body>
		<?php echo $this->tag->submitButton(array('Adicionar Receitas')); ?>
		<table border="1">
			<?php foreach ($receitas as $receita) { ?>
				<tr> 
					<td>Descrição: <a href="/savemoney/receita/update/<?php echo $receita->id; ?>"><?php echo $receita->descricao; ?></a></td> 
					<td>R$<?php echo $receita->valor; ?></td>
					<td><a href="/savemoney/receita/remove/<?php echo $receita->id; ?>" onclick="removeDespesa()">X</a></td>
				</tr>
			<?php } ?>
		</table>

	</body>
</html>