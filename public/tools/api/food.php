<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

$meal = $_GET['meal'];
$hall = $_GET['hall'];

switch($hall) 
{
	case 'hss': $hall_id = 20; break;
	case 'abel': $hall_id = 22; break;
	case 'selleck': $hall_id = 23; break;
	case 'cpn': $hall_id = 24; break;
	case 'east_cafe': $hall_id = 101; break;
	case 'east_deli': $hall_id = 106; break;
}

$url = 'http://menu.unl.edu/default.aspx?gComplex='.$hall_id;

$page = file_get_contents($url);

preg_match_all('~<div id="cphMain_pnl.*?Items".*?</div>~s', $page, $divs);

$data = $divs[0];

switch($meal)
{
	case 'breakfast': $meal_data = $data[0]; break;
	case 'lunch': $meal_data = $data[1]; break;
	case 'dinner': $meal_data = $data[2]; break;
}

$meal_items = array();

preg_match_all('~<span class="MenuItem".*?</span>~s', $meal_data, $matches);

foreach($matches[0] as $m)
{
	$meal_items[] = strip_tags($m);
}

echo json_encode($meal_items);