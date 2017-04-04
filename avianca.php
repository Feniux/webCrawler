<?php

$html = file_get_html("https://www.avianca.com.br/");

foreach($html->find('p') as $k => $p)

	$avianca[$k] = $p;


	for($j = 0; $j < count($avianca); $j++){

	if(!empty($avianca[$j]))
		echo $avianca[$j];
	else
		echo "AVIANCA - posição array vazia";

}






?>