<?php

$html = file_get_html("https://www.voegol.com.br/pt/sua-viagem/ofertas/ofertas-da-semana");

foreach($html->find('table') as $z => $table) 
			
	$gol[$z] = $table;


?>