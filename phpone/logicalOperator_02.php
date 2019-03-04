<?php

//逻辑运算符的短路求值
//如果逻辑运算符，之前的表达式已经可以决定整个表达式的结果，之后的表达式不会执行
$int = 10;
$bool = true || ++$int;
echo $int,'<br>';

//案例
$int1 = 1;
$int2 = 2;
if($int1 = 2 || $int2 = 5){
	$int1++;
	$int2++;
}echo $int1,' ',$int2;
/*

1，进行的数赋值操作，将右侧 2 || $int2 = 5 执行结果赋值给 $int1
2，进行的是 逻辑或 的运算符
3，逻辑运算符，两侧必须是布尔类型，2 会自动转化为布尔类型，救国是true
4，逻辑或 第一个表达式的结果为 true，发生短路求值，整个表达式的结果为 true $int2 = 5 第二个表达式不被执行
5，逻辑表达式的整个结果为 true 赋值给 $int1
6，if与剧中 () 当中的表达式结果为 true 执行执行体中的代码
7，$int1++ $int1 为 true 不支持 ++ 操作，结果为true
8，执行 echo 语句
    echo $int1  echo语句只能输出字符串，true转化为字符串1
    echo $int2  输出结果为3
 最终 的输出结果为 1 3

*/