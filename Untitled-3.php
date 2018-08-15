<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulario 2</title>
</head>

<body>
	

	
<?php
	// vardump() retorna o tipo da variavel e seu valor
	// === é o sinal de identico e so retorna true se os 2 valores forem do mesmo tipo e valor
	
	
	
if (isset($_POST['idade']))
{
  $idade=$_POST['idade'];
	if ($idade<18)
	{
		echo "é uma criança ou adolescente";
	}elseif($idade>=18 and $idade<60){
		echo "é um adulto";
		
	}else{
		echo "A idade é de uma pessoa idosa";
	}
}
	
	$temp;
	$temp = isset($_GET['enviar']) ? $_GET['enviar']:"break";
	printf("\n\n");
	
	echo $temp;
	
	// if com menos linha : $var = (condiçao) ? "se for true executa oque tiver aqui" : "senao ele executa oque tiver aqui";
	
    // para mandar coisas do navegador para o codigo basta por no fim da url: ?variavel1=valores&variavel2=valores2 etc.
	
		$login = $_POST['login'];
		$senha = $_POST['senha'];
	echo "LOGIN :<br>";
	
	if ($login && $senha )
	{
		echo ("Login : $login<br>")."\n";
		echo ("Senha : $senha<br>");	
	}

?>
	
	<form method="POST">
	<input type="text" name="login"><br>
		<input type="password" name="senha"><br>
		<input type="submit">
		
	
	</form>
	
	
<form method="POST">
	<br><br>
   <input type="text" name="nome"/>
   <input type="submit">
   <input type="text" name="idade"/>
   <input type="submit">
	
	
</form>
	
	
	
	
	
	
	
</body>
</html>
