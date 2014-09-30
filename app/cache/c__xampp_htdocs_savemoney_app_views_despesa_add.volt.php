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
				<tr>
					<td>Categoria:
						<select name="categoria">
							<?php foreach ($categoria as $cat) { ?>
								<option value="<?php echo $cat->cat_id; ?>"><?php echo $cat->cat_nome; ?></option>
							<?php } ?>	
						</select>
					</td>
				</tr>
			</table>
			<?php echo $this->tag->submitButton(array('Adicionar', 'onclick' => 'adicionarDespesa()')); ?>
			<?php echo $this->tag->linkTo(array('despesa/index/', 'Voltar')); ?>
		</form>
	</body>

</html>

<script type="text/javascript">
	function removeDespesa(){
		alert("Despesa removida com sucesso!");
	}

	function adicionarDespesa(){
		alert("Despesa adicionada com sucesso!");
	}
</script>
