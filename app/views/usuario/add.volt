<html> 
	<head>
		<h1>Adicionar Usuario</h1>
	</head>

	<body>
		<form name='addUser' method="post" action="/savemoney/usuario/add">
			<table border="1">
				<tr>
					<td>Nome: {{text_field('nome')}}</td>
				</tr>
				<tr>
					<td>Email: {{text_field('email')}}</td>
				</tr>
				<tr>
					<td>Senha: {{password_field('senha')}}</td>
				</tr>
			</table>
			{{submit_button('Adicionar')}}
		</form>
	</body>

</html>