<?php
/*echo phpinfo();*/

$html = file_get_html("https://www.latam.com/pt_br/");

foreach($html->find('p') as $p)
echo($p);
foreach($html->find('span') as $span)
echo($span);
/*$ch = curl_init ("");
curl_setopt($ch, CURLOPT_URL, 'https://www.latam.com/pt_br/');
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:54.0) Gecko/20100101 Firefox/54.0"); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$html = curl_exec($ch);

$dom = new DOMDocument;
$dom->loadHTML($html);

$xpath = new DOMXPath($dom);

$results = $xpath->query("//*[@class='Rate-detail']");

if ($results->length > 0) {
    echo $review = $results->item(0)->nodeValue;
}*/

?>