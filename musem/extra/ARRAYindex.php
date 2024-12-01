<?php

$fruits = array('apple', 'banaan', 'kiwi');

$html = '<table><tr><th>fruit</th></tr>';

foreach ($fruits as $fruit) 
{$html .= '<tr><td>' .$fruit .= '</td></tr>' }; 


$html .= '</table>';
echo $html;
 

$data =array('name' => 'erik', 'age' => 25, 'hobbies' => 'lezen');

array naar json string 
$json = json_encode($data);
echo $json;

// json strin terug naar array
$array = json_decode(@json, true);
print_r($data);

?>