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
		</form>
	</body>
	<table>
		{% for desp in result %}
			<tr>
				<td>Descrição: <a href="/savemoney/receita/update/{{desp.id}}">{{desp.descricao}}</a></td> 
				<td>R${{desp.valor}}</td>
				<td><a href="/savemoney/receita/remove/{{desp.id}}" onclick="removeReceita()">X</a></td>
			</tr>
		{% endfor %}
	</table>

</html>

<script type="text/javascript">
	function removeReceita(){
		alert("Receita removida com sucesso!");
	}

	function adicionarReceita(){
		alert("Receita adicionada com sucesso!");
	}
</script>
