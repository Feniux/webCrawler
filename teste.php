<?php
	
	require_once 'simple_html_dom/simple_html_dom.php';

	class Temperatura {

		public function __construct(){
			$this->getTemperatura('http://www.azulviagens.com.br/'); //http://www.tempoagora.com.br/previsao-do-tempo/brasil/Petrolina-PE
		}

		public function getTemperatura($url){
			
			$html = file_get_html($url);

			preg_match_all('/<h4 class=\"box-title color4">(.*?)<\/h4>/', $html, $result);
			preg_match_all('/<span class=\"price style2 style3 style4 color5">(.*?)<\/span>/', $html, $result2);
			preg_match_all('/<span class=\"price style2 style3 color5">(.*?)<\/span>/', $html, $result3);
			//echo 'Temperatura em petrolina ' . $result[1][2];
			echo '<pre>'; print_r($result); print_r($result3);
			/*echo count($result);*/
			/*echo count($result2);*/
			echo count($result3[1]);

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