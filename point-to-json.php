<?php
// $a = array(
// 		"c2dictionary" => true,
// 		"data" => array(
// 			"A" => array("name" => "anh", "age" => 25),
// 			"B" => array("name" => "mano", "age" => 25),
// 		)	
// 	);

/* case 1: work */
// $a = array(
// 	"knight" => array(
// 		"name" => "anh"
// 	),
// 	"wizard" => array(),
// );

/* case 2: */
// $a = array(
// 	array("name" => "anh"),
// 	array("name" => "mano"),
// 	array("name" => "em be")
// );

// $a = array(
// 	array("cap" => 1, "point" => 1000, "icon" => "apple"),
// 	array("cap" => 2, "point" => 600, "icon" => "exercise"),
// 	array("cap" => 2, "point" => 300, "icon" => "dental"),

// );

$a = array(
	array("cap" =>1, "point" =>1000, "icon" => "1x3png"),//1
	array("cap" =>1, "point" =>1200, "icon" => "2png"),//2
	array("cap" =>1, "point" =>1000, "icon" => "1x3png"),//3
	array("cap" =>1, "point" =>1000, "icon" => "4png"),//4
	array("cap" =>5, "point" =>100, "icon" => "5x6png"),//5
	array("cap" =>5, "point" =>100, "icon" => "5x6png"),//6
	array("cap" =>1, "point" =>1500, "icon" => "8x9x10x11png"),//8
	//no number 7
	array("cap" =>1, "point" =>1000, "icon" => "8x9x10x11png"),//9
	array("cap" =>1, "point" =>1000, "icon" => "8x9x10x11png"),//10
	array("cap" =>1, "point" =>1000, "icon" => "8x9x10x11png"),//11
	array("cap" =>1, "point" =>1000, "icon" => "12x13x14png"),//12
	array("cap" =>1, "point" =>1000, "icon" => "12x13x14png"),//13
	array("cap" =>1, "point" =>1000, "icon" => "12x13x14png"),//14
	array("cap" =>2, "point" =>1000, "icon" => "15png"),//15
	array("cap" =>3, "point" =>1600, "icon" => "16png"),//16
	array("cap" =>1, "point" =>2000, "icon" => "17png"),//17
	array("cap" =>10, "point" =>50, "icon" =>"18png"),//18
	array("cap" =>10, "point" =>100, "icon" => "19png"),//19, no image for 19, use image of 20
	array("cap" =>10, "point" =>100, "icon" => "20png"),//20
	array("cap" =>2, "point" =>1500, "icon" => "21png"),//21
	array("cap" =>1, "point" =>3000, "icon" => "22png"),//22
);


$c = array();
foreach ($a as $key => &$value) {
	$cap = $value["cap"];
	while($cap){
		$r = array("point" => $value["point"], "icon" => $value["icon"]);
		$c[] = $r;
		$cap--;
	}
}

// var_dump($c);


$b = json_encode($c);
$b = str_replace("\"", "\"\"", $b);
$b = "\"" . $b . "\"";
echo $b;
echo count($c);
$total = 0;
foreach ($a as $row) {
	$total += $row["cap"] * $row["point"];
}
echo $total;