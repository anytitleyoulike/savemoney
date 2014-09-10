<html> 
	
	<head>
		<h1>SaveMoney</h1>
	</head>
	<body>
		{{submit_button('Adicionar Receitas')}}
		<table border="1">
			{% for receita in receitas %}
				<tr> 
					<td>Descrição: <a href="/savemoney/receita/update/{{receita.id}}">{{receita.descricao}}</a></td> 
					<td>R${{receita.valor}}</td>
					<td><a href="/savemoney/receita/remove/{{receita.id}}" onclick="removeDespesa()">X</a></td>
				</tr>
			{% endfor %}
		</table>

	</body>
</html>