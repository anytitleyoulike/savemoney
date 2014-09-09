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
			</table>
			{{submit_button('Adicionar')}}
		</form>
	</body>
	<table>
		{% for desp in result %}
			<tr>
				<td>Descrição: <a href="/savemoney/despesa/update/{{desp.id}}">{{desp.descricao}}</a></td> 
				<td>R${{desp.valor}}</td>
			</tr>
		{% endfor %}
	</table>

</html>
