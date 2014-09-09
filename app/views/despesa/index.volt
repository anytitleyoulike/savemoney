<html> 
	
	<head>
		<h1>SaveMoney</h1>
	</head>
	<body>
		{{submit_button('Adicionar Despesas')}}
		<table border="1">
			{% for despesa in result %}
				<tr> 
					<td>{{despesa.descricao}}</td>
					<td>{{despesa.valor}}</td>
				</tr>
			{% endfor %}
		</table>
	</body>
</html>