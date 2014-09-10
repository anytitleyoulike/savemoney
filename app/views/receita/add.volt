<html> 
	<head>
		<h1>Adicionar Receita</h1>
	</head>

	<body>
		<form name='add' method="post" action="/savemoney/receita/add">
			<table border="1">
				<tr>
					<td>Descrição: {{text_field('descricao')}}</td>
				</tr>
				<tr>
					<td>Valor: {{text_field('valor')}}</td>
				</tr>
			</table>
			{{submit_button('Adicionar', 'onclick': 'adicionarReceita()')}}
			{{link_to('receita/index/','Voltar')}}
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
