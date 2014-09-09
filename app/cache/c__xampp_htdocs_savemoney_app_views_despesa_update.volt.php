<html> 
	
	<head>
		<h1>Alterar Despesa</h1>
	</head>

	<body>
		<!-- <form name='updateDespesa' method="post" action="/savemoney/despesa/update"> -->
		<?php echo $this->tag->form(array('despesa/update/', 'id' => 'updateDespesa', 'method' => 'post')); ?>
			<table border="1">
				<tr>
					<td>Descrição: <?php echo $this->tag->textField(array('descricao', 'value' => $despesa->descricao)); ?></td>
				</tr>
				<tr>
					<td>Valor: <?php echo $this->tag->textField(array('valor', 'value' => $despesa->valor)); ?></td>
				</tr>
			</table>
			<?php echo $this->tag->linkTo(array('products/search', 'Search')); ?>
			<?php echo $this->tag->submitButton(array('Atualizar Despesa')); ?>
			<?php echo $teste; ?>
		<input type="hidden" name="id" value="<?php echo $despesa->id; ?>">
		</form>
	</body>

</html>

</html>