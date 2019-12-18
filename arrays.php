<?php

$langauges = array("PHP", "Python", "C++", "Node", "Go");

var_dump($langauges);

print_r($langauges);


$grades = [40, 50, 80, 75, 20, 99];

$people = ["Abah", "James", "Joseph", "Luke", 17, true, 28.22, __FILE__];

$people["mathew"] = "math";

print_r($people);



$menu = [
    'home' => 'Home.php',
    'about' => 'About.php'	
];

print_r($menu);



$categories = [

	'products' => ['iPhone', 'iPad', 'MacPro'],
	'services' => ['Design', 'Coding', 'Development']
];

print_r($categories);


$categories2 = [

        'products' => ['iphone' => [ 'name' =>  'iPhone', 'link' => '/iphone' ],
 	'ipad' => ['name' => 'iPad', 'link' => '/ipad'], 
	'MacPro' => ['name' => 'MacPro', 'link' => '/macpro']
	],


        'services' => ['Design', 'Coding', 'Development']
];


print_r($categories2);


echo $langauges[0] . " is awesome\n";

$categories2['products'];

echo "\n" . $categories2['products']['iphone']['name'];



echo json_encode($categories2);
