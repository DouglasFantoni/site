<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	
	<?php
	
	
	
	
	// Deixando uma variavel ou funçao private ela só pode ser acessada de dentro da função, usa-se extends para usar uma classe como classe herança
	
	
	class SuperClasse {
		
		public $a = 5;
		
		public function super () {
			echo $this->a."<br>";
			
		}
	}
	
	class SubClasse extends SuperClasse {
		
	  public $a = 10;
		
		public function sub ($x) {
			$this->a = $x;
		}
	}
	
	
	$sub = new SubClasse();
	$sub->sub(15);
	$sub->super();
	
	
	
	
	
	
	
	
	
	
	
	// Destrutores :   __destruct é usada para executar um ultimo codigo antes da função ser deletada. só é executada no momento da morte do objeto
	
	class pessoa4 {
		
		function __construct () {
			echo "Funcão construtora invocada";
			
		} 
		
		function __destruct () {
			echo "Função destruct invocada <br> Objeto Destruido ";
		}
	}
	
	$temp2=new pessoa4;
	unset($pessoa4);
	
	
	

	
	
	// Exemplo de uso de construtores e criando um objeto dentro de outro
	
	
	class Exibir {
		
		public function exibir_idade ($nome,$idade) {
			
		echo "<br> Seu nome é $nome";
		echo "<br> Sua idade é $idade <br>";
	  }
	}
	
	class pessoa3 {
		public $nome;
		public $idade=0;
		
		function __construct ($nome,$idade) {
			$this->nome= $nome;
			$this->idade=$idade;
			
			$temp = new Exibir();
			$temp->exibir_idade($this->nome,$this->idade);
			
		}
		
	}
	
	
	
	
	new pessoa3 ("Douglas",19);
	
	
	
	
	// Quarta classe  - função construct 
	
	class pessoa2 {
		public $idade = 0;
		public $nome; 
			function __construct () {
			var_dump($this);
			
		}
	}
	
	new pessoa2();
	
	
	
	// Terceira classe   - acessando uma variavel dentro de uma função em um objeto ( $this )
	
	
	class Pessoa1 {
		
		public $idade=0;
		
		public function get_idade ($idade) {
			
			
			$this->idade=18;
			echo "<br>";
			if ($idade>=0 & $idade < $this->idade)
			{
				echo "Voçe é menor de idade: ";
				return $idade;
			} 
			
				echo "Voçe é maior de idade: ";
			
			
			return $idade;
		}
		
	}
	
	$t2 = new Pessoa1();
	echo "Com a idade {$t2->get_idade(15)}";
	
	
	
	
	// Segunda classe
	
	
	class Teste {
		
		public function imprimeTeste() {
			
			echo "<br> Teste <br>";
		}
	}
	
	
	$t1 = new Teste();
	$t1->imprimeTeste();
	
	
	
	// Primeira Classe :
	
	
	class Pessoa {
		
		public $nome = "Douglas";
		public $idade = 19;
		
		
	}
	
	// Objetos
	
	$objetoA = new Pessoa();
	
	$objetoA -> idade = 20;  // acessa o objeto e altera uma variavel
	
	
	var_dump($objetoA);
	
	unset ($objetoA); // Deletar a variavel da memoria
	
	
	
	
	/* 
			$_GET['nome'] ?? ' ' é uma comparação, se o da esquerda for verdadeiro, ele será usado, senao usa-se o da esquerda
	*/
	
	if (count($_GET))
	{
		echo "<br>"."Nome: ".($_GET['nome'] ?? ' ')."<br>"."Email: ".($_GET['email'] ?? ' '); 
	}
	
	?>
</body>
</html>