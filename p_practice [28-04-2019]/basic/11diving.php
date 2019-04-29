<?php 

//empty array
//$names = [];
//var_dump($names);

///////////////////////////////////
//associatev array
// values associate with spacific key

$people = [
	'hum' => 21, 
	'suf' => 24
];

// echo $people[];

//var_dump($people);

// $people = [
// 	'alex' => 21,
// 	'billy' => 24
// ];

// echo $people[0]; // error  
// echo $people['billy'];

///////////////////////////////////

//multidimential array
// we create array in an other array
//e.g list of users, list of comments etc


// $users = [
// 	['username' => 'alex'],
// 	['username' => 'bily'],
// 	['username' => 'hope']

// ];


//var_dump($users);
//grab first users
 //echo $users[2]['username'];
// echo $users[1]['username'];


///////////////////////////////////
//more level in m.d.array

$users = [
	[
		'username' => 'alex',
		'email' => 'alex@abc.com'
	],

	[
		'username' => 'billy',
		'email' => 'bily@abc.com'

	]

];

//echo '<pre>', var_dump($users), '</pre>';
 echo $users[0]['email'];

////////////////////////////////////////
//more go deep in level

// $users = [
// 	[
// 		'username' => 'alex',
// 		'email' => 'alex@abc.com',
// 		'like' => ['cats', 'dogs']
// 	],

// 	[
// 		'username' => 'billy',
// 		'email' => 'bily@abc.com',
// 		'like' => ['music', 'cats']

// 	]

// ];


//echo 'UserName: ' . $users[1]['username'];
//echo '<br>';
//echo 'Email: ' . $users[1]['email'];
//echo '<pre>', var_dump($users), '</pre>';

//echo $users[0]['like'][1];
// echo $users[1]['like'][2];


////////////////////////////////////////////

//best technique to accssing array with loop

// foreach ($users as $user) {
// 	//var_dump($user);
// 	echo $user['username'] . '<br>';
// }


//////////////////////////////////////////// 
//add to this array

// $users[] = [
// 	'username' => 'abdul',
// 	'email' => 'abdul@abc.com',
// 	'likes' => ['reading', 'cooking']

// ];

//update to this array

//$users[2]['likes'][1]= 'jumping';
// $users[1]['about']='I am learnig to code';

// echo '<pre>', var_dump($users), '</pre>';


////////////////////////////////////////
