<?php

//table => class=tab-pane active table

require 'simple_html_dom/simple_html_dom.php';

$html = file_get_html("https://www.voegol.com.br/pt/sua-viagem/ofertas/ofertas-da-semana");

foreach($html->find('table') as $z => $table) 			
	$gol[$z] = $table;

for($l = 0; $l < count($gol); $l++)
	if( !empty(strip_tags($gol[$l]))  && (strip_tags($gol[$l]) != 'Compre aqui ' || strip_tags($gol[$l]) != 'Compre aqui') ){
		echo $gol[$l];
}



?>