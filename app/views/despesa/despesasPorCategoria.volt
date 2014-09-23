<html>

	<head> <h1>Despesas Por Categoria</h1></head>
	
	<body>
		<table border="1">
			<tr>
				<td>Categoria</td>
				<td>Total</td>
			</tr>
			{% for despesa in result %}
				<tr>
					<td>{{despesa.cat_nome}}</td>
					<td>{{despesa.total}}</td>
				</tr>
			{%endfor%}
		</table>
	</body>
</html>