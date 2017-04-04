<?php

$html = file_get_html("http://www.azulviagens.com.br/");

foreach($html->find('h4') as $y => $h4){

	$azul[$y] = $h4;

}

for($i = 0; $i < count($azul); $i++){

	if(!empty($azul[$i]))
		echo $azul[$i];
	else
		echo "AZUL - posição array vazia";

}



/*foreach($html->find('span') as $span)
echo($span);*/




?>