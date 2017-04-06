<?php


require 'simple_html_dom/simple_html_dom.php';

$html = file_get_html("http://www.azulviagens.com.br/");

preg_match_all('/<h4 class=\"box-title color4">(.*?)<\/h4>/', $html, $ofer);
preg_match_all('/<span class=\"price style2 style3 style4 color5">(.*?)<\/span>/', $html, $price_1);
preg_match_all('/<span class=\"price style2 style3 style4 color5">(.*?)<\/span>/', $html, $price_2);

$array_result_azul[] = '<thead>'.
							'<tr>'.
								'<th>Destinos</th>'.
								'<th>Preços: </th>'.
							'</tr>'.
						'</thead>'.
						'<tbody>';


for($i = 0; $i < count($ofer[1]); $i++){
	

	if($i < count($price_1[1])){

		$pr = explode('R$', $price_1[1][$i]);

		array_push($array_result_azul, 
			'<tr>'.
				'<td>'.$ofer[1][$i].'</td>'.
				'<td>'.$pr[0].' R$'.$pr[1].'</td>'.
			'</tr>'
		);
	}

	if($i >= count($price_1[1])){
		$cc =0;
		$pr2 = explode('R$', $price_2[1][$cc]);
		array_push($array_result_azul, 
			'<tr>'.
				'<td>'.$ofer[1][$i].'</td>'.
				'<td>'.$pr2[0].' R$'.$pr2[1].'</td>'.
			'</tr>'
		);
		$cc++;
	}
}
array_push($array_result_azul, '</tbody><tfooter></tfooter>');
foreach( $array_result_azul as $arr) echo $arr;

?>