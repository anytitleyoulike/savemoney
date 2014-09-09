<html> 
	
	<head>
		<h1>Alterar Despesa</h1>
	</head>

	<body>
		<!-- <form name='updateDespesa' method="post" action="/savemoney/despesa/update"> -->
		{{ form('despesa/update/', 'id':'updateDespesa','method': 'post')}}
			<table border="1">
				<tr>
					<td>Descrição: {{text_field('descricao','value':despesa.descricao)}}</td>
				</tr>
				<tr>
					<td>Valor: {{text_field('valor','value':despesa.valor)}}</td>
				</tr>
			</table>
			{{ link_to("products/search", "Search") }}
			{{submit_button('Atualizar Despesa')}}
	
		<input type="hidden" name="id" value="{{despesa.id}}">
		</form>
	</body>

</html>

</html>