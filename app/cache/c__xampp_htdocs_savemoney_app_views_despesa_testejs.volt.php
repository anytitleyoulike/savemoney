<html> 
<body>
<input type="button" value="<?= $teste ?>" id="botao" onclick="testeJs()">
</body>
</html>

<script type="text/javascript"> 

 function testeJs(a) {
 	a = document.getElementById('botao').getAttribute('value');
 	value = confirm("o valor do botão se chama: "+a);
 
 	console.log(value);
 }
</script>