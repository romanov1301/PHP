<!DOCTYPE html>
<html>
<head>
	<title>TEST</title>
</head>
<body>
	<header>
		
		<h1>Hello World</h1>

		<hr>

	</header>

	<form name="test" action="check.php" method="post">
		<label>Name: </label><br />
	<input type="text" name="name" placeholder="name">
	<br />
		<label>Email: </label><br />
	<input type="text" name="Email" placeholder="Email">
	<br />
		<label>Message: </label><br />
	<textarea name="message" cols="15" rows="10"></textarea>
	<br />
	<input type="submit" name="done" value="all done">





	</form>


<?php

 
	echo "Hello World"; //this string return hello world
	
	
	function perevod($pysto){

		echo $pysto;

	}


	$perevod = "<br />";

	perevod($perevod);


	$x = 15;
	echo $x;

	perevod($perevod);


	echo "Hello World";



	perevod($perevod);


	echo date('d.m.Y h:i');

	perevod($perevod);


	$arr = array(
		"name" => "Roman",
		"surname" => "Tkachuk",
		"age" => "19",
		"byear" => "02.01.2000",
		"education" => array("school and university")
	);


	echo $arr["byear"];


	perevod($perevod);

define(PI, 3.14);
echo PI;

 echo "<br />";


function printWords($word){
	echo $word;
}

function math($first, $second){

$summa = $first + $second;

return $summa;

}


$b = 12;
$k = 45;

$sum = math($b, $k);

printWords($sum);



function perenis ($pysto) {

echo $pysto;

}


$perenis = "<br /> ";

perenis ($perenis);


$x = 15;
echo $x;

perenis($perenis);

echo "Hello World";

$array = array(25,19.43,7,92);

perenis($perenis);

echo $array[0]."<br />". $array[1]. "<br />". $array[2]. "<br />". $array[3];

$array[] = 18;

perenis($perenis);

echo $array[4];

for ($i=0; $i < count($array) ; $i++) { 
	echo $array[$i]."<br />";
}


$summa = 0;

echo "<hr />". getAverage(array('first' => 12 , "sec" => 25, "red" => 1));

function getAverage($array){
	foreach ($array as $key => $value) {
		$summa += $value;
	}
	return $summa / count($array);
}





$array = (array (12,25,85,41,11,0,6),array (31,85,45,7,11,24,63), array(43,17,62,19,95,16,25));

	for($i = 0; $i < count ($array); $i++) {

		for($j = 0; $j < count($array[$i]); $j++) {

			echo $array[$i][$j]. " | ";
		}
		echo "<br />";
	}

	</body>
</html>
?>
