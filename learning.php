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




?>
