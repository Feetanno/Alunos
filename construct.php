<?php  
class Impressora
{
	public function imprimir($doc){
		$conteudo = $doc->getConteudo();
		echo $conteudo;
	}
}

abstract class BaseSocumento
{
	abstract function getConteudo();
}

class Documento
{
	private $conteudo;

	public function __construct ($conteudo){
		$this->conteudo = $conteudo;
	}

	public function getConteudo(){
		return $this->conteudo;
	}
}

class Planilha
{
	private $conteudo;

	public function __construct(array $linhas){
		$this->conteudo = '';
		foreach ($linhas as $linha) {
			$thi->conteudo .= $linha . "<br>";
		}
	}

	public function getConteudo(){
		return $this->conteudo;
	}

}


$doc = new Documento('Boa Noite.');
$impressora = new Impressora();
$impressora->imprimir($doc);
echo '<hr>';



?>