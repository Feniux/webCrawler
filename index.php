<?php
require 'simple_html_dom/simple_html_dom.php';
/*$html = file_get_html("https://www.voegol.com.br/pt/sua-viagem/ofertas/ofertas-da-semana");

foreach($html->find('table') as $table);

echo $table;

include 'azul.php';
 echo "<br />";*/
include 'latam.php';

//extract data from the post extract($_POST); 
//set POST variables 
//URL IS SET, I HAVE JUST TOOK IT OUT OF THIS CODE SNIPPET 
/*$urltopost = 'https://www.azultravel.com.br/travel/arc_waiting.cfm'; 
$datatopost = array ( 's_3_2_5_0' => 0130016825566667, 'SWEFo' => 'SWEForm3_0', 
	'SWEField' => 's_3_1_0_0', 'SWENeedContext' => 'true', 'W' => 't', 'SWECmd' => 'InvokeMethod', 
	'SWEMethod' => 'SearchForLicence', 'SWESP' => 'false', 'SWEDIC' => 'false', 'SWEReqRowId' => '0',
	'SWEView' => 'LDL+Licence+Query+View','SWEC' => '3','SWEBID' => '1363349905','SWEGHOTO' => 'true', 
	'SWETS' => '1363349913267', 'SWEApplet' => 'LDL+Query+Licences'); 
$ch = curl_init ($urltopost); 
curl_setopt ($ch, CURLOPT_POST, true); 
curl_setopt ($ch, CURLOPT_POSTFIELDS, $datatopost); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0); 
$returndata = curl_exec ($ch); 
echo $returndata; */



?>