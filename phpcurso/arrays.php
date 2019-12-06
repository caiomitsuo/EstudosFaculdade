<?
//array_keys- passa somente as chaves do array.
//array_values - Passa somento os valores.
//array_pop - Pega o array e elimina o ultimo registro dele.
//array_shift - remove o primeiro array.
//arsoft - apresesenta os array de forma ao contraria
//asort - coloca os numeros em ordem alfabetica
//arsort - coloca ao contrario.
//count - mostra a quantide de elementos que tem no meu array.
//in_array.


$array = array(
    "Caio",
    "Ronny",
    "Heloisa",
    "Zequinha",
    "Patricio"

);
if(in_array("Caio",$array )) {
    echo "O vencedor foi Caio";
}
?>