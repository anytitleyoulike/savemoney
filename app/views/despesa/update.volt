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
				<tr>
					<td>Categoria: 
							<select name="categoria">
								{%for cat in categoria%}

									{% if cat.cat_id == despesa.catId %}
										<option value="{{cat.cat_id}}" selected>{{cat.cat_nome}}</option>
									{% else %}
										<option value="{{cat.cat_id}}">{{cat.cat_nome}}</option>
									{% endif %}
								{%endfor%}	
							</select>
						</td>
				<tr>
					<td>Forma de Pagamento:
						<select name="forma_pgto">
							<option value="credito">Cartão de Crédito</option>
							<option value="debito">Cartão de Débito</option>
							<option value="dinheiro">À Vista</option>
						</select>
					</td>
				</tr>

				</tr>
			</table>
			
			{{submit_button('Atualizar Despesa', 'onclick': 'alterarDespesa()')}}
	
		<input type="hidden" name="id" value="{{despesa.id}}">
		</form>
	</body>

</html>

<script type="text/javascript">

	function alterarDespesa(){
		alert("Despesa alterada com sucesso!");
	}
</script>