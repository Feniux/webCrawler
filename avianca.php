<?php

$html = file_get_html("https://www.avianca.com.br/");

foreach($html->find('p') as $p)
echo($p);







?>