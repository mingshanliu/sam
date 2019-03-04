<?php

//自增自减运算符  ++  --  每执行一次，数值改变1
$int = 10;
echo ++$int;
//前缀语法：将运算符写在变量之前
//后缀语法：将运算符写在变量之后
/*
区别：
前缀语法，在执行当前行php程序之前，先让变量进行自增或者自减操作，之后再去执行php的其他程序；
后缀语法，在执行当前php程序时，先执行当前行所有的php程序，最后变量再执行自增或者自减操作，

总结：
前缀：变量在当前行已经执行了自增操作，数值+1或者-1
后缀：变量在当前行始终维持存储的数值，在当前行所有程序执行结束之后，数据才进行+1或者-1操作

*/

//练习
$int = 10;
// 当前行不执行 ++ 操作，$int为10，$num1被赋值数字也是10
$num1 = $int++;
// 之后，$int++执行操作，此时$int变为 11
// 当前行$int原始数据为11，前缀先自增，$int变为12
//$num2被赋值是12
$num2 = ++$int;
echo $num1,' ',$num2,' ',$int;


// 其他标量数据类型对于 ++  --  的支持效果
// 1，字符串
//字符串完全支持 ==  --  的操作，但是实际项目中不会使用
// 2，布尔值
// 完全不支持 ++ -- 的操作
// 3，null
// 不支持 -- 的操作
// 支持 ++ 的操作，第一次执行++ 的操作，变为数字1，数据类型也变为int，之后就支持 ++  --  操作