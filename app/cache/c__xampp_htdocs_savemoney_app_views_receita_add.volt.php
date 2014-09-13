<html> 
	<head>
		<h1>Adicionar Receita</h1>
	</head>

	<body>
		<form name='add' method="post" action="/savemoney/receita/add">
			<table border="1">
				<tr>
					<td>Descrição: <?php echo $this->tag->textField(array('descricao')); ?></td>
				</tr>
				<tr>
					<td>Valor: <?php echo $this->tag->textField(array('valor')); ?></td>
				</tr>
			</table>
			<?php echo $this->tag->submitButton(array('Adicionar', 'onclick' => 'adicionarReceita()')); ?>
			<?php echo $this->tag->linkTo(array('receita/index/', 'Voltar')); ?>
		</form>
	</body>
</html>

<script type="text/javascript">
	function removeReceita(){
		alert("Receita removida com sucesso!");
	}

	function adicionarReceita(){
		alert("Receita adicionada com sucesso!");
	}
</script>
