<?php

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
?>
