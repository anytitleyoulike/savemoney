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

				<?php foreach ($result as $despesa) { ?>
					<tr align="center">
						<td><a href="/savemoney/despesa/update/<?php echo $despesa->id; ?>"><?php echo $despesa->descricao; ?></a></td>
						<td>R$<?php echo $despesa->valor; ?></td>
						<td><?php echo $despesa->forma_pgto; ?></td>
					</tr>
				<?php } ?>
				
			<?php } else{ ?>
				<tr>
					<td>Forma de Pagamento</td>
					<td>Total</td>
				</tr>
				<?php foreach ($result as $despesa) { ?>

					<tr align="center">
						<td><a href="/savemoney/despesa/despesasPorFormaPagamento/<?php echo $despesa->forma_pgto; ?>"><?php echo $despesa->forma_pgto; ?></a></td>
						<td>R$<?php echo $despesa->sumatory; ?></td>
					</tr>
				<?php } ?>
			<?php }?>
		</table>
	</body>
</html>