<html> 
	
	<head>
		<h1>SaveMoney</h1>
	</head>
	<body>
		{{submit_button('Adicionar Despesas')}}
		<table border="1">
			{% for despesa in result %}
				<tr> 
					<td>Descrição: <a href="/savemoney/despesa/update/{{despesa.id}}">{{despesa.descricao}}</a></td> 
					<td>R${{despesa.valor}}</td>
					<td><a href="/savemoney/despesa/remove/{{despesa.id}}" onclick="removeDespesa()">X</a></td>
				</tr>
			{% endfor %}
		</table>

	</body>
</html>