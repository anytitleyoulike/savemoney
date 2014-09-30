<html>

	<head> <h1>Despesas Por Categoria</h1></head>
	
	<body>
		<table border="1">
			<?php if($a == true){?>
				<tr>
					<td>Descrição</td>
					<td>Valor</td>
					<td>Categoria</td>
				</tr>
				{% for despesa in result %}
					<tr align="center">
						<td><a href="/savemoney/despesa/update/{{despesa.id}}">{{despesa.descricao}}</a></td>
						<td>R${{despesa.valor}}</td>
						<td>{{despesa.categoria.cat_nome}}</td>
					</tr>
				{%endfor%}
				
			<?php } else{ ?>
				<tr>
					<td>Categoria</td>
					<td>Total</td>
				</tr>
				{% for despesa in result %}

					<tr align="center">
						<td><a href="/savemoney/despesa/despesasPorCategoria/{{despesa.cat_nome}}">{{despesa.cat_nome}}</a></td>
						<td>R${{despesa.total}}</td>
					</tr>
				{%endfor%}
			<?php }?>
		</table>
	</body>
</html>