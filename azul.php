<?php

$html = file_get_html("http://www.azulviagens.com.br/");

foreach($html->find('h4') as $h4)
echo($h4);
foreach($html->find('span') as $span)
echo($span);




?>