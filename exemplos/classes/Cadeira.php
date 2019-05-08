<?php 

class Cadeira
{
  //propriedades
  private $cor;
  private $estofado;
  private $preco;
  private $fixaOuNao;

  public function __construct($xCor, $xEstofado)
  {
    $this->cor = $xCor;
    $this->estofado = $xEstofado;
    $this->fixaOuNao;
  }

  public function sentar()
  {
    echo "sentar...";
  }
}

?>