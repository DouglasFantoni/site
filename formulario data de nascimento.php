<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulario do dia de nascimento</title>
</head>

<body>
	
	
	<?php
	

	// heredoc - colocar grandes textos em uma variavel :
	/*
	$heredoc = 
	<<<algo
		
		Exemplo de heredoc      
		
	algo;
	
	echo $heredoc;
	*/
	
	// a diferençã entre aspas simples e duplas é que a dupla é possivel ter metacaracteres emquanto q a outra so interpreta letras												
	// funçoes : array_map (funçao anonima, array)  - percorre todo o arrai, mandando os valores para a função um a um
	// funçoes : array_filter (array, funçao anonima) - joga o valor do array pra func, se ela retornar 1 o valor é aprovado e adicionado ao outro array, senao nao é adicionado.
	
	
	$lista = [1,2,3,4,5];
	
	$f = function ($x)
	{		
		return $x*$x;
	};
	
	$array_proc = array_map($f,$lista);
	
	print_r($array_proc);
	
	
	
	$filtro = function ($f)
	{
		return $f < 3;
	};
	
	$array_filtred = array_filter($lista,$filtro);
	
	print_r($array_filtred);
	
	
	
	

	
	// Função anonima = função sem nome, é atribuida a uma variavel
	
	$func = function ($nome) {
		
		echo "O nome enviado foi $nome";
	};
	
	$func("Alguem");
	
	
	
	
	
	
	
	// Importar scripts PHP    o include se nao achar o arquivo o codigo continua igual, no requer ele para
	
	// include('code.php');        
	// include ('code.php');
	
	
	// include_once e require_once funcionam igual, mas verificam se o arquivo já foi aberto antes, e só abre se ele ainda nao foi

	

	
	
	
	
	// operador de comparação :  <=>  retorna -1 se o valor da direita for menor, 0 se for igual, e 1 se for maior
	
	
	foreach (range(0,9) as $v ) {
		
		$x = rand(0,9);
		$rel = $v <=> $x;
		
		echo "V = $v  <=>  X=$x  é  $rel \n";
		
	}
	
	
	
	
	
	
	
	// Para tirar as variaveis do automatico e defini-las nós mesmos : 
	// declare(strict_types=1);
	
	function tipado() : int // array, float, etc
	{
		return(50);
	}
	echo tipado()." ";
	
	
	
	// Ponteiros ( &$var)
	
	$arr1=[1,2,3];
	$arr2=&$arr1;
	
	
	// Para retornar um endereço :  function &pont (&$arr2)    O return fica igual.
	function pont (&$arr2)
	{
		print_r($arr2);
	}
	
	pont($arr1);
	
	
	
	
	// Visibilidade das funçoes e retorno das mesmas :
	
	$teste = 2;
	
	function somarapido (...$valores)
	{
		
		 
		global $teste;  // Traz uma variavel global toda para dentro da função
		//echo $GLOBALS["teste"];  // Pega o valor de uma variavel global uma vez
		
		
		$teste +=2;
		$total=array_sum($valores);
		return $total;
	}
	
	echo " A soma dos valores deu : ".somarapido(1,2,8,4)." Teste : ".$teste." ";
	
	
	
	
	
	
	
	
	
	
	
	
	# FUNÇOES : 
	
	function soma() {
		
		
		
		$total = func_get_arg(0) + func_get_arg(1);
		echo " Minha função ".$total."    ";
	}
	soma(1,4);
	
	function somatudo () {
		
		$lista = func_get_args();
		$qntd = func_num_args();
		$total=0;
		
		
		for ($x=0;$x<$qntd;$x++)
		{
			$total += $lista[$x];
		}
		
		/* Ou : 
	
	foreach ($lista as $item)
	{
	  $total += $item;
	}
	
	*/
		echo " Total : ".$total." ";
		
	}
	
	
	
	
	
	somatudo(1,4,7,3,3,2);
	
    #Array com valores vinculados
	
	$vet=["pedro"=>10,"marcos"=>20,"joao"=>30];
	
	echo $vet["pedro"];
	
	# Array multidimensional :
	
	$array = [
		            ["ID"=>2,"Nome"=>"José","Pontos"=>5],
		            ["ID"=>1,"Nome"=>"Pedro","Pontos"=>10],
		            ["ID"=>3,"Nome"=>"Lucas","Pontos"=>15],

	         ];
	echo "\n";
	# Ordenar array usa-se o short, para iverte-lo usa-se o array_reverse ():
	
sort ($array);
	
$array = array_reverse($array);
	
	# verificar se um elemento esta contido em um array : in_array (elemento,array)
	
	echo " O numero 3 esta contido nesse array ?".in_array("1",[1,2,3]);
		
		print_r ($array);
	
	echo "\n";
	echo "\n";
	echo "\n";
	
	
	
	
	
	
	
	
	if (isset($_POST["cbmes"]))
	{
		$mes = $_POST["cbmes"];
		switch ($mes)
		{
			case 1:
				echo "Janeiro";
					break;
			case 2:
				echo "Fevereiro";
					break;
			case 3: 
				echo "Março";
				break;
			case 4:
				echo "Abril";
				break;
			case 5:
				echo "Maio";
				break;
			case 6:
				echo "Junho";
				break;
			case 7:
				echo "Julho";
				break;
			case 8: 
				echo "Agosto";
					break;
			case 9: 
				echo "Setembro";
				break;
			case 10:
				echo "Outubro";
					break;
			case 11:
				echo "Novembro";
				break;
			case 12: 
				echo "Dezembro";
					break;

				
		}
		
		
	}
	$arr=["zero","um","dois","tres","quatro"];
	$arr[]="cinco";
	$arr[6]="seis";
	
	#PARA SABER O NUMERO DE UM ARRAY USAR count($array)
	
	#ALTERAR ELEMENTO DO ARRAY :
	
	$arr[1]="Um";
	
	
	#EXCLUINDO ELEMENTOS
	
	unset($arr[6]);
	
	$arr[]=rand(1,5);
	
	print_r($arr);
	
	
	#Range : range(minimo,maximo,numero de unidades ( de 1 em um, dois em dois etc))
	$a[]=range("a","e",1);
	$b[]=range(0,6,1);
	
	printf("\n");
	print_r($b);
	printf("\n");
	print_r($a);
	
	
	# Percorrer um array pegando seu index e valor elemento por elemento
	foreach ($arr as $index => $valor)
	{
		echo "\n".$index.":".$valor;
	}
	
	
	
	
	
	
	
	
	
	?>
	
	</br>
	</br>
<form method="post">
<select type="text" name="cbmes">
	
	  <option value="1">Janeiro</option>
	  <option value="2">Fevereiro</option>
	  <option value="3">Março</option>
	  <option value="4">Abril</option>
	  <option value="5">Maio</option>
	  <option value="6">Junho</option>
	  <option value="7">Julho</option>
	  <option value="8">Agosto</option>
	  <option value="9">Setembro</option>
	  <option value="10">Outubro</option>
	  <option value="11">Novembro</option>
	  <option value="12">Dezembro</option>
	
	</select>
	<input type="submit">

</form>
	
	
	
	
	
	<p>
	asdsadasdasdsdasdasd
		asdasdawf grdhgsfasdghf
		gfsdsfg sgr hdtj  j 
		j
		sg sd hdsgf
	
	
	</p>
	</br>
	
	
		<?php
	
	echo "Insira sua data de nascimento :";
	
	if (isset($_POST["dia"]))
	{
		echo "\n\n\n\n";
		
		echo " O dia selecionado foi ".$_POST["dia"];

    }
	
	
	?>	
	

	</br>
	</br>
	
	<form method="POST">
	<select name="dia">
	
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
		
		
	</select>
		
		
  <select name="mes">
	  
	  <option value="1">Janeiro</option>
	  <option value="2">Fevereiro</option>
	  <option value="3">Março</option>
	  <option value="4">Abril</option>
	  <option value="5">Maio</option>
	  <option value="6">Junho</option>
	  <option value="7">Julho</option>
	  <option value="8">Agosto</option>
	  <option value="9">Setembro</option>
	  <option value="10">Outubro</option>
	  <option value="11">Novembro</option>
	  <option value="12">Dezembro</option>
	  
	</select>
		
		<select name="ano">
		
		<option value="1">1990</option>
		<option value="2">1991</option>
		<option value="3">1992</option>
		<option value="4">1993</option>
		<option value="5">1994</option>
		<option value="6">1995</option>
		<option value="7">1996</option>
		<option value="8">1997</option>
		<option value="9">1998</option>
		<option value="10">1999</option>
		<option value="11">2000</option>
						
		</select>
		<input type="submit">
	
	</form>
	
	
	

	
</body>
</html>