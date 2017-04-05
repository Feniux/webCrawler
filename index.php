<?php

require 'simple_html_dom/simple_html_dom.php';

include 'azul.php';

include 'avianca.php';

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
		

		for($i = 0; $i < count($azul_textos); $i++){

			if(!empty($azul_textos[$i]))
				echo $azul_textos[$i];
			else
				echo "AZUL Textos- posição array vazia";

		}
	echo "<br /><br />";

		for($m = 0; $m < count($azul_precos); $m++){

			if(!empty($azul_precos[$m]))
				echo $azul_precos[$m];
			else
				echo "AZUL Preços- posição array vazia";

		}
	echo "<br /><br />";
	echo "=====================================================";
	echo "<br /><br />";

/*<== Fim da AZUL*/


/*AVIANCA ==>*/

	echo "<strong><u>"."AVIANCA"."</strong></u>"."<br />";
		for($j = 0; $j < count($avianca); $j++){

			if(!empty($avianca[$j]))
				echo $avianca[$j];
			else
				echo "AVIANCA - posição array vazia";

		}



/*<== Fim da AVIANCA*/







?>
