<html> 
	
	<head>
		<h1>SaveMoney</h1>
	</head>
	<body>
		{{submit_button('Adicionar Receitas')}}
		<table border="1">
			{% for receita in receitas %}
				<tr> 
					<td>{{receita.descricao}}</td>
					<td>{{receita.valor}}</td>
				</tr>
			{% endfor %}
		</table>
	</body>
</html>