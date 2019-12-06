<?
/*
$nomes = array ("Caio","Pedro","Lucas","Afonso"); 
//Foreach = para cada item faça alguma coisa
//$nomes as $alunos = Para cara variavel do nomes ele vai definar dentro da variavel aluno
foreach($nomes as $aluno){
    echo "Alunos: ".$aluno."<br/>";
}
?>

<?

$nomes = array(
    array("nome"=>"Caio","idade"=> 90),
    array("nome"=>"Helo","idade"=> 92),
    array("nome"=>"Pedro","idade"=> 20),
    array("nome"=>"Lucas","idade"=> 10),
);
foreach ($nomes as $aluno) {
    echo "Aluno".$aluno["nome"]." - idade: ".$aluno["idade"]."<br/>";
}
*/
// Nesse caso o caio é o valor de nome entáo somente saira os dados como.
//Caio 90 Parana Brasil.
//Para chamar nome: Caio a estrutura ficara foreach($aluno as $chave => $dado)
                                                //echo $chave."=".$dado. "<br/>"
$aluno = array(
    "nome" => "Caio",
    "idade" => 90,
    "estado" => "Parana",
    "pais" => "Brasil",
);

foreach($aluno as $dado) {
    echo $dado."<br/>";
}
?>
