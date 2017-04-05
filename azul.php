<?php

$html = file_get_html("http://www.azulviagens.com.br/");

foreach($html->find('h4') as $y => $h4){

	$azul_textos[$y] = $h4;

}

foreach($html->find('span') as $n => $span){

	$azul_precos[$n] = $span;

}
/*$keywords = preg_split("/[\s,]+/", $azul[0]); 
$keywords = substr($keywords[2], -8);*/

/*for($i = 0; $i < count($azul); $i++){

	if(!empty($azul[$i]))
		echo $azul[$i];
	else
		echo "AZUL - posição array vazia";

}*/




?>