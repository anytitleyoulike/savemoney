<html>

	<head> <h1>Despesas Por Categoria</h1></head>
	
	<body>
		<table border="1">
			<tr>
				<td>Categoria</td>
				<td>Total</td>
			</tr>
			<?php foreach ($result as $despesa) { ?>
				<tr>
					<td><?php echo $despesa->cat_nome; ?></td>
					<td><?php echo $despesa->total; ?></td>
				</tr>
			<?php } ?>
		</table>
	</body>
</html>