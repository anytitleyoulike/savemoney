<html> 
	
	<head>
		<h1>Alterar Receita</h1>
	</head>

	<body>
		<!-- <form name='updateReceita' method="post" action="/savemoney/Receita/update"> -->
		<?php echo $this->tag->form(array('receita/update/', 'id' => 'updateReceita', 'method' => 'post')); ?>
			<table border="1">
				<tr>
					<td>Descrição: <?php echo $this->tag->textField(array('descricao', 'value' => $receita->descricao)); ?></td>
				</tr>
				<tr>
					<td>Valor: <?php echo $this->tag->textField(array('valor', 'value' => $receita->valor)); ?></td>
				</tr>
			</table>
			
			<?php echo $this->tag->submitButton(array('Atualizar Receita', 'onclick' => 'alterarReceita()')); ?>
	
		<input type="hidden" name="id" value="<?php echo $receita->id; ?>">
		</form>
	</body>

</html>

<script type="text/javascript">

	function alterarReceita(){
		alert("Receita alterada com sucesso!");
	}
</script>