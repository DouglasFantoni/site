<?php

$valor="Minha Var";
$num1=5;
$num2=10;

$cores = array('Verde','Branco','vermelho','azul')
	
$cores[0]="outroverde";
$cores[]='rosa';
	
echo 'Hellow Friend';

print_r($cores);
	

echo "<br> ".$num1." + ".$num2. " =  ".($num1+$num2)."<br>";

//gettype retorna o tipo da variavel

echo "variavel do tipo ".gettype($num1);

//$num1=$num2;

if ($num1!=$num2)

	echo "<br>é diferente";
else
	echo "<br>é igual";


echo ("\n	 foda-se");

?>