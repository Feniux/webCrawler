<?php

//class=infos-offer

require 'simple_html_dom/simple_html_dom.php';

$html = file_get_html("https://www.avianca.com.br/");

preg_match_all('/<div class=\"infos-offer">(.*?)<\/div>/', $html, $ofer);

$array_result_avianca[] = '<thead>'.
							'<tr>'.
								'<th colspan="">Principais OFertas</th>'.
							'</tr>'.
						'</thead>'.
						'<tbody>';

for($i = 0; $i < count($ofer[1]); $i++){
	
	$aux = $ofer[1][$i];

	for($j = $i; $j < count($ofer[1])-$j; $j++) if($ofer[1][$j] == $aux) $s = 1;

	if($s != 0)
		array_push($array_result_avianca, 
			'<tr>'.
				'<td>'.$ofer[1][$i].'</td>'.
			'</tr>'
		);

	
}

array_push($array_result_avianca, '</tbody><tfooter></tfooter>');

foreach($array_result_avianca as $arr) echo $arr;

?>