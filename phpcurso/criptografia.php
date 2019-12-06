<?
//md5() - nao tenho como descriptografar
//base64encode - voce tem como descobrir o que ta escrito.
$nome = "caio";
$nome2 = base64_encode($nome);

echo "Nome original: ".$nome."<br/>";
echo "Nome criptografado: ".$nome2;
?>