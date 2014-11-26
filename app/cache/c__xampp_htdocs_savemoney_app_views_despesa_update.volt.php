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
				<tr>
					<td>Categoria: 
							<select name="categoria">
								<?php foreach ($categoria as $cat) { ?>

									<?php if ($cat->cat_id == $despesa->catId) { ?>
										<option value="<?php echo $cat->cat_id; ?>" selected><?php echo $cat->cat_nome; ?></option>
									<?php } else { ?>
										<option value="<?php echo $cat->cat_id; ?>"><?php echo $cat->cat_nome; ?></option>
									<?php } ?>
								<?php } ?>	
							</select>
						</td>
				<tr>
					<td>Forma de Pagamento:
						<select name="forma_pgto">
							<option value="credito">Cartão de Crédito</option>
							<option value="debito">Cartão de Débito</option>
							<option value="dinheiro">À Vista</option>
						</select>
					</td>
				</tr>

				</tr>
			</table>
			
			<?php echo $this->tag->submitButton(array('Atualizar Despesa', 'onclick' => 'alterarDespesa()')); ?>
	
		<input type="hidden" name="id" value="<?php echo $despesa->id; ?>">
		</form>
	</body>

</html>

<script type="text/javascript">

	function alterarDespesa(){
		alert("Despesa alterada com sucesso!");
	}
</script>