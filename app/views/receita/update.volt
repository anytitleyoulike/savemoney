<html> 
	
	<head>
		<h1>Alterar Receita</h1>
	</head>

	<body>
		<!-- <form name='updateReceita' method="post" action="/savemoney/Receita/update"> -->
		{{ form('receita/update/', 'id':'updateReceita','method': 'post')}}
			<table border="1">
				<tr>
					<td>Descrição: {{text_field('descricao','value':receita.descricao)}}</td>
				</tr>
				<tr>
					<td>Valor: {{text_field('valor','value':receita.valor)}}</td>
				</tr>
			</table>
			
			{{submit_button('Atualizar Receita', 'onclick': 'alterarReceita()')}}
	
		<input type="hidden" name="id" value="{{receita.id}}">
		</form>
	</body>

</html>

<script type="text/javascript">

	function alterarReceita(){
		alert("Receita alterada com sucesso!");
	}
</script>