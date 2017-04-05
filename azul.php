<?php

$html = file_get_html("http://www.azulviagens.com.br/");

preg_match_all('/<h4 class=\"box-title color4">(.*?)<\/h4>/', $html, $ofer);
preg_match_all('/<span class=\"price style2 style3 style4 color5">(.*?)<\/span>/', $html, $price_1);
preg_match_all('/<span class=\"price style2 style3 style4 color5">(.*?)<\/span>/', $html, $price_2);




?>