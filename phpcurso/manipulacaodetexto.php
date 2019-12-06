<?
//explode
$nome = "Caio Mitsuo";

$x = explode(" ",$nome);

print_r($x);

//implode

$array = array("Caio","Mitsuo");

$nomecompleto = implode(" ",$array);

echo $nomecompleto;

//numberformat

$z = number_format(8.283434, 2);

echo $z;
?>