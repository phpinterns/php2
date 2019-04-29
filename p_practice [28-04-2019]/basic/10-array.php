<?php

//array is container is stored all type of data type
// array datype which can allow to be store withen value (mix data type same type)

// $name1 = 'billy';
// $name2 = 'hope';
// $name3 = 'alex';

//$names = array('billy', 'hope', 'alex');

//$names = ['billy', 'hope', 'alex', "jawad"];

//echo $names; // error
//var_dump($names);

//echo $names[4];

// echo $names[0];
// echo $names[1];
// echo $names[2];

//offset value error
//echo $names[3];

// assign a new value
// $names = ['billy', 'hope', 'alex', "jawad"];
// $names[] = 'ubaid';
// $names[] = 'qb';
// $names[5] = '';
// var_dump($names);
// $names[] = 'dole';
// echo $names[3];

//echo '<br>'. count($names);

////////////////////////////////


//$names = array('billy', 'hope', 'alex');
//$names = ['billy', 'hope', 'alex'];
//var_dump($names);
//echo $names[2];
//$names[] = 'billy';
//echo $names[3];
//echo '<br>'. count($names);


/////////////////////////////

$names = ['billy', 'hope', 'alex', 'dele', 'ali'];

$arrLength = count($names);
//echo $arrLength;

for($x=0; $x < $arrLength; $x++){
	echo $names[$x];
	echo '<br>';
}
