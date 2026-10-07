<?php
echo "Exercício 1 - GrupoI<br>";
function retangulo($altura=5)
{
  $i=1;
  while($i<=$altura)
    {
       echo "******<br>";
       $i++;
    }   
}
retangulo(20);
echo "Exercício 2 - GrupoI<br>";
function trocar($a,$b)
{
  echo "Antes da troca A=$a e B=$b<br>";
  $c=$a;
  $a=$b;
  $b=$c;
  echo "Depois de trocar A=$a e B=$b";

}
trocar(5,7);
echo "Exercício 1 - Grupo II<br>";
function inverter($string)
{ $tamanho=strlen($string);
  for($i=$tamanho-1;$i>=0;$i--)
    echo $string[$i];

}
inverter("Irchad Meneses");
echo "<br>";
echo strrev("Jayson");
echo "<br>Exercício 1 - Grupo III<br>";
$vetor=array(1,-2,3,4,5,6,7);
echo ("o menor elemento é " . min($vetor));
echo "<br>A media é:";
echo (array_sum($vetor)/count($vetor));
$somap=0;$soman=0;
foreach($vetor as $valor)
{
  if($valor>0)
    $somap+=$valor;
  if($valor<0)
    $soman+=$valor;//$soman=$soman+$valor;
}
echo "<br>A soma dos positivos é $somap e a soma dos negativos é $soman";
echo "<br>Exercício 2 - Grupo III<br>";
$chave=array();
for($i=0;$i<=5;$i++)
  {
    $num=rand(1,50);
    $aux=in_array($num,$chave);
    if($aux==false)
      {
        $chave[$i]=$num;
        echo "$num<br>";

      }
    else
      {
        $i--;
      }
  }
echo "<br>Exercício 3 - Grupo III<br>";
$cavalos=array("Cavalo1"=>88,"Cavalo2"=>18,"Cavalo3"=>120,"Cavalo4"=>50,"Cavalo5"=>75);
asort($cavalos);
$a=1;
foreach($cavalos as $c=>$v)
  {
    echo "$c ganhou com velocidade $v<br>";
    $a++;
    if($a==4)
       break;
  }
echo "<br>Exercício 2 - Ficha 3<br>";
class Retangulo{
  private $altura;
  private $largura;
  public function __construct($altura,$largura)
  {
    $this->altura=$altura;
    $this->largura=$largura;
  }
  public function Calculararea()
  {
    return $this->altura*$this->largura;
  }
  public function Calcularperimetro()
  {
    return 2*($this->altura+$this->largura);
  }
}


?>
