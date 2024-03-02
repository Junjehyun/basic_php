<?php

// 산술연산자는 각각 항목을 연산하는 키워드를 뜻한다.
// 문자열 연산자는 문자열을 연산한다. 숫자의 사칙연산이나 문자열 연산 등이 이에 속한다.

$a = 10;
$b = 20;

$c = $a + $b;
$d = $a - $b;
$e = $a * $b;
$f = $a / $b;
$g = $a % $b;

$h = 'hi';
$i = "php";
$j = $h . $i;
$k = "$h nice to meet you. $i";

var_dump($a);echo "<br />";
var_dump($b);echo "<br />";
var_dump($c);echo "<br />";
var_dump($d);echo "<br />";
var_dump($e);echo "<br />";
var_dump($f);echo "<br />";
var_dump($g);echo "<br />";
var_dump($h);echo "<br />";
var_dump($i);echo "<br />";
var_dump($j);echo "<br />";
var_dump($k);echo "<br />";

// +는 숫자 두 개를 더하는 연산자이다.
$c = $a + $b;

// -는 앞 숫자에서 뒤 숫자를 빼는 연산자이다.
$d = $a - $b;

// *는 숫자 두 개를 곱하는 연산자이다.
$e = $a * $b;

// /는 앞 숫자에서 뒤 숫자를 나누는 연산자이다.
$f = $a / $b;

// %는 앞 숫자에서 뒤 숫자를 나눈 나머지를 구하는 연산자이다.
$g = $a % $b;

// . 은 문자열 두 개를 이어붙이는 연산자이다. ★
$j = $h . $i;

// 결과는 아래와 같다.
// string(6) "hi php"

// 다른 언어에서 문자열을 이어붙이는 기호가 대부분 +로 php와 다름에 유의한다. 문자열을 + 기호로 
// 이어붙일 경우 경고가 나오거나 숫자로 형변환 되어 예기치 않은 동작을 한다.

// "로 감싼 문자열은 안에 다른 변수를 넣을 수 있다. "안의 변수는 값으로 치환되어 문자열과 결합된다.
$k = "$h nice to meet you. $i";

// 결과는 다음과 같다. 
// string(25) "hi nice to meet you. php"



?>