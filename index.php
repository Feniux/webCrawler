<?php
require 'simple_html_dom/simple_html_dom.php';
$html = file_get_html("http://www.azulviagens.com.br/");

foreach($html->find('p') as $j);

echo $j;







?>