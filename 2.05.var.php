<?php
$a = 1; // 정수 int
$b = 2; // 정수 int
$c = $a + $b; // 정수 a,b 계산

$d = 3.14; // 실수 float
$e = "hi"; // 문자열 String
$f = 'hello'; // 문자열 String
$g = array(1,2,3,4); // 배열 Array
$h = array('a'=>1, 'b'=>2); // 연관배열 associative array

var_dump($a);echo "<br />";
var_dump($b);echo "<br />";
var_dump($c);echo "<br />";
var_dump($d);echo "<br />";
var_dump($e);echo "<br />";
var_dump($f);echo "<br />";
var_dump($g);echo "<br />";
var_dump($h);echo "<br />";

// 변수는 메모리상의 값에 이름을 붙이는 것을 뜻한다.
// $변수이름 = "변수에 들어갈 값" 형태로 사용한다.
// php의 변수는 $로 시작한다 ! 
// 영어, 숫자, 언더바(_)만 가능하며 숫자로 시작할 수 없다. 
// php의 변수는 타입선언을 하지 않는다! 타입은 값에 따라 자동으로 결정된다. 

// h의 연관배열(associative array)은 여러개의 값을 키:값 쌍(pair)로 담는 구조다.
// php에서는 배열과 연관배열을 둘 다 배열이라고 부른다.

// var_dump는 데이터의 정보를 보여주는 내장 함수이다.
// echo "<br />";은 html에서 줄바꿈을 보여주기 위해 넣었다. 
?>