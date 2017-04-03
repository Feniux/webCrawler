<?php
require 'simple_html_dom/simple_html_dom.php';
$html = file_get_html("http://www.azulviagens.com.br/");

foreach($html->find('label') as $j);
foreach($html->find('select') as $i);
echo $j;
echo $i;






?>