<?php

//字符串

//语法：所有字符串类型的数据必须都在定界符之中

$dtr = '深圳';
var_dump($dtr);

//整数类型，数值100
$str = 100;
var_dump($str);

//写在定界符之中，字符串类型
$str2 = '100';
var_dump($str2);

//定界符单引号，双引号
$int = 100;

//单引号，会将变量直接输出为字符串
echo '我今天考试考了$int 分' , "<br>";
//双引号，会解析变量中存储的数据，输出的是变量中存储的数值，输出的是变量$int中存储的数值100
echo "我今天考试考了$int 分" , "<br>";

//一般情况下，如果没有需要解析的变量，使用单引号
//单引号和双引号不能包裹其自身

//为了防止特殊符号的冲突，php程序中，特殊符号可以使用转义字符来实现输入