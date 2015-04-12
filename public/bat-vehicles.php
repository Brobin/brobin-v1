<pre>
<?php

$ships = [
	'Bat-Wing',
	'Bat-Bike',
	'Bat-Mobile',
	'Bat-Unicycle',
	'Bat-Limo',
	'Bat-Lambo',
	'Bat-Camry',
	'Bat-Skates'
];

$characters = 'abcdefghijklmnopqrstuvwxyz0123456789';

for($i=0; $i<1000; $i++)
{
	// id
	echo $i.' ';

	// serial number
	$string = '';
	for ($j = 0; $j < 8; $j++) {
	  $string .= $characters[rand(0, strlen($characters) - 1)];
	}
	echo $string.' ';

	//type
	echo $ships[rand(0, count($ships) - 1)].' ';

	// mileage 1-10000
	echo (rand(100, 1000000)/100).' ';

	//mech fault 1-20
	echo rand(1, 20).' ';

	//elect fault 1-20
	echo rand(1, 20).' ';

	//stealth 0-1
	echo (rand (0, 100) / 100).' ';

	//top speed
	echo (rand (100, 50000) / 100).' ';

	//weapons 1-10
	echo rand(1, 10).' ';

	//date
	echo date('m/d/Y', strtotime( '-'.mt_rand(0,1000).' days')).' ';

	//boolean
	echo rand(0, 1).' ';

	//boolean
	echo rand(0, 1).' ';

	echo "\n";
}

?>
</pre>