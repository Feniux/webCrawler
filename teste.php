<?php
//http://simplehtmldom.sourceforge.net/

/*echo phpinfo();*/
//strip_tags
//https://www.latam.com/pt_br/

	require_once 'simple_html_dom/simple_html_dom.php';

	class Temperatura {

		public function __construct(){
			$this->getTemperatura('http://www.azulviagens.com.br/'); //http://www.tempoagora.com.br/previsao-do-tempo/brasil/Petrolina-PE
		}

		public function getTemperatura($url){
			
			$html = file_get_html($url);

			preg_match_all('/<h4 class=\"box-title color4">(.*?)<\/h4>/', $html, $ofer);
			preg_match_all('/<span class=\"price style2 style3 style4 color5">(.*?)<\/span>/', $html, $price_1);
			//preg_match_all('/<div class=\"content-card">(.*?)<\/div>/', $html, $ofer2);
			/*preg_match_all('/<span class=\"price style2 style3 style4 color5">(.*?)<\/span>/', $html, $result2);
			preg_match_all('/<span class=\"price style2 style3 color5">(.*?)<\/span>/', $html, $result3);*/
			//echo 'Temperatura em petrolina ' . $result[1][2];
			
			/*for($i = 0; $i < count($price_1[1]); $i++){

				$ar.=$price_1[1][$i]; 
				$ar.=' '; 
			}*/

			$teste = explode('R$', $price_1[1][0]);

			echo '<pre>'; 
			echo $teste[0];
			/*foreach($teste as $t) echo $t;*/

			print_r($price_1);
/*			echo '<pre>'; print_r($result2); 
			echo '<pre>'; print_r($result3);*/
			echo count($price_1[1])."\n";
			/*echo count($result2[1])."\n";
			echo count($result3[1])."\n";*/

			/*$temperatura = explode('°',$result[1][2]);

			echo json_encode(
				array(
					"temperatura" => $temperatura[0]				
					)
			);*/

		}
	}

	$t = new Temperatura();
?> 