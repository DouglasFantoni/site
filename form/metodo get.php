<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	
	<?php
	
	
			if (count($_GET))
	{
			
		echo "<br>"."Nome: ".($_GET['nome'] ?? ' ')."<br>"."Email: ".($_GET['email'] ?? ' '); 
	}
	
	echo "<br> <br> <br>";
	     
	
	
	class checar_email {
		
		private $provedor = ' ';
		
		
		private function checagem_provedor ()
	{
		$array_prov =
		[
			'@gmail.com',
			'@outlook.com', 
			'@hotmail.com',
			'@live.com',
			'@uol.com.br',
			'@bol.com.br',
			'@yahoo.com',
			'@ymail.com',
			'@globomail.com'
		];
		  if (array_keys($array_prov,$this->provedor))
		  {
			  echo "Conta verificada e criada !!";
			  return 1;
		  }else { 
		  	  echo "Endereço de email inválido.";
			  return 0;
		  }
	}
		
		
	public function checagem ($email)
		{
        
		
		$this->provedor = strstr($email,'@');
		//echo checa
		$this->checagem_provedor();
         

		//$ok = array_keys($teste,'teste');  // Usar esse para verificar se existe um elemento em um array. 
		}
	

		
	
	}
	
	
	$check_mail = new checar_email();
	$check_mail->checagem($_GET['email']);

	?>
</body>
</html>