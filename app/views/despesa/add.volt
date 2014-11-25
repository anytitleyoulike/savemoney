<html> 
	<head>
		<h1>Adicionar Despesa</h1>
	</head>

	<body>
		<form name='add' method="post" action="/savemoney/despesa/add">
			<table border="1">
				<tr>
					<td>Descrição: {{text_field('descricao')}}</td>
				</tr>
				<tr>
					<td>Valor: {{text_field('valor')}}</td>
				</tr>
				<tr>
					<td>Categoria:
						<select name="categoria">
							<option value="">Selecione..</option>
							{%for cat in categoria%}
								<option value="{{cat.cat_id}}">{{cat.cat_nome}}</option>
							{%endfor%}	
						</select>
					</td>
				</tr>
				<tr>
					<td>Forma de Pagamento:
						<select name="forma_pgto">
							<option value="credito">Cartão de Crédito</option>
							<option value="debito">Cartão de Débito</option>
							<option value="dinheiro">À Vista</option>
						</select>
					</td>
				</tr>
			</table>
			{{submit_button('Adicionar', 'onclick': 'adicionarDespesa()')}}
			{{link_to('despesa/index/','Voltar')}}
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
