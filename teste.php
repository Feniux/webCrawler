<?php
//http://simplehtmldom.sourceforge.net/

/*echo phpinfo();*/
//strip_tags
//https://www.latam.com/pt_br/

	require_once 'simple_html_dom/simple_html_dom.php';

	class Temperatura {

		public function __construct(){
			$this->getTemperatura('https://www.avianca.com.br/'); //http://www.tempoagora.com.br/previsao-do-tempo/brasil/Petrolina-PE
		}

		public function getTemperatura($url){
			
			$html = file_get_html($url);

			preg_match_all('/<div class=\"infos-offer">(.*?)<\/div>/', $html, $ofer);
			preg_match_all('/<div class=\"content-card">(.*?)<\/div>/', $html, $ofer2);
			/*preg_match_all('/<span class=\"price style2 style3 style4 color5">(.*?)<\/span>/', $html, $result2);
			preg_match_all('/<span class=\"price style2 style3 color5">(.*?)<\/span>/', $html, $result3);*/
			//echo 'Temperatura em petrolina ' . $result[1][2];
			echo '<pre>'; print_r($ofer);
/*			echo '<pre>'; print_r($result2); 
			echo '<pre>'; print_r($result3);*/
			echo count($ofer[1])."\n";
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