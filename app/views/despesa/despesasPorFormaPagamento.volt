<html>

	<head> <h1>Despesas Por Forma de pagamento</h1></head>
	
	<body>
		<table border="1">
			<?php if($condition == true){?>
				<tr>
					<td>Descrição</td>
					<td>Valor</td>
					<td>Forma de Pagamento</td>
				</tr>

				{% for despesa in result %}
					<tr align="center">
						<td><a href="/savemoney/despesa/update/{{despesa.id}}">{{despesa.descricao}}</a></td>
						<td>R${{despesa.valor}}</td>
						<td>{{despesa.forma_pgto}}</td>
					</tr>
				{%endfor%}
				
			<?php } else{ ?>
				<tr>
					<td>Forma de Pagamento</td>
					<td>Total</td>
				</tr>
				{% for despesa in result %}

					<tr align="center">
						<td><a href="/savemoney/despesa/despesasPorFormaPagamento/{{despesa.forma_pgto}}">{{despesa.forma_pgto}}</a></td>
						<td>R${{despesa.sumatory}}</td>
					</tr>
				{%endfor%}
			<?php }?>
		</table>
	</body>
</html>