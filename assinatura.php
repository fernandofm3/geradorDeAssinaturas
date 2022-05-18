<?php

//Resebendo informações da assinatura do funcionário
$nome = $_POST['nome'];
$setor = $_POST['setor'];
$telefone = $_POST['telefone'];

//Criando a imagem
header("Content-type: image/png");
//Usando uma imagem existente
$im = imagecreatefromjpeg("img/ass.jpg");

//Cor do fundo da imagem
$fundo = imagecolorallocate($im, 255, 255, 255);

//Cor da fonte
$preto = imagecolorallocate($im, 17, 54, 109);

//Informações da assinatura
$texto = "$nome 
$setor \n
+55 (11) $telefone";

$fonte = "Arial.ttf";

imagettftext($im, 8, 0, 3, 14, $preto, $fonte, $texto);
imagepng($im);
imagedestroy($im);