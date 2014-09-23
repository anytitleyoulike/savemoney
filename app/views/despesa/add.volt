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
							{%for cat in categoria%}
								<option value="{{cat.id}}">{{cat.cat_nome}}</option>
							{%endfor%}	
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
