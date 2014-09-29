<html> 
	
	<head>
		<h1>SaveMoney</h1>
	</head>
	<body>
		{{submit_button('Adicionar Despesas')}}
		<table border="1">
			<tr>
				<td>Descrição</td>
				<td>Valor</td>
			</tr>
			{% for despesa in result %}
				<tr> 
					<td> <a href="/savemoney/despesa/update/{{despesa.id}}">{{despesa.descricao}}</a></td> 
					<td>R${{despesa.valor}}</td>
					<td><a href="/savemoney/despesa/remove/{{despesa.id}}" onclick="removeDespesa()">X</a></td>
				</tr>
			{% endfor %}
		</table>

	</body>
</html>