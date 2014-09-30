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
				<?php foreach ($result as $despesa) { ?>
					<tr align="center">
						<td><a href="/savemoney/despesa/update/<?php echo $despesa->id; ?>"><?php echo $despesa->descricao; ?></a></td>
						<td>R$<?php echo $despesa->valor; ?></td>
						<td><?php echo $despesa->categoria->cat_nome; ?></td>
					</tr>
				<?php } ?>
				
			<?php } else{ ?>
				<tr>
					<td>Categoria</td>
					<td>Total</td>
				</tr>
				<?php foreach ($result as $despesa) { ?>

					<tr align="center">
						<td><a href="/savemoney/despesa/despesasPorCategoria/<?php echo $despesa->cat_nome; ?>"><?php echo $despesa->cat_nome; ?></a></td>
						<td>R$<?php echo $despesa->total; ?></td>
					</tr>
				<?php } ?>
			<?php }?>
		</table>
	</body>
</html>