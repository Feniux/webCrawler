<?php

require 'simple_html_dom/simple_html_dom.php';



/*GOL ==>*/

	$html = file_get_html("https://www.voegol.com.br/pt/sua-viagem/ofertas/ofertas-da-semana");
	echo "<strong><u>"."GOL"."</strong></u>"."<br />";
		foreach($html->find('table') as $z => $table) 
			
			$gol[$z] = $table;


		for($l = 0; $l < count($gol); $l++){

			if(!empty($gol[$l]))
				echo $gol[$l];
			else
				echo "GOL - posição array vazia";

		}

	echo "<br /><br />";
	echo "=====================================================";
	echo "<br /><br />";

/*<== Fim da GOL*/


/*AZUL ==>*/

	echo "<strong><u>"."AZUL"."</strong></u>"."<br />";
		include 'azul.php';

	echo "<br /><br />";
	echo "=====================================================";
	echo "<br /><br />";

/*<== Fim da AZUL*/


/*AVIANCA ==>*/

	echo "<strong><u>"."AVIANCA"."</strong></u>"."<br />";
		include 'avianca.php';



/*<== Fim da AVIANCA*/







?>
