<?php

//流程控制语句 if
/*

随机生成1-105的数值

如果是100，输出：恭喜您获得满分，得到mac！
如果是90-99，输出：恭喜您获得xx分，得到90！
如果是80-89，输出：恭喜您获得xx分，得到80！
如果是70-79，输出：恭喜您获得xx分，得到70！
如果是60-69，输出：恭喜您获得xx分，得到60！
如果是50-59，输出：恭喜您获得xx分，得到50！
如果是49以下，输出：恭喜您获得xx分，得到49！
*/
$int = mt_rand(1,105);
// 当前情况

// 如果数值是1-100，当数值为100时，满足第一个条件，执行第一个执行体
if($int == 100){
	echo "您获得{$int}分，晋升段位大师";

// 如果进入第二个判断条件，证明数值不是100，是1-99的数值，默认小于100，可以就判断是否大于等于90
// $int>=90 如果满足条件，数值为90-99
}elseif($int>=90){
	echo "您获得{$int}分，晋升段位王者";

// 如果进入第二个判断条件，证明数值不不符合上述两个条件，也就是1-89的数值范围，只要判断是否大于等于80即可
// $int >=80 如果满足条件，数值为80-89之间
}elseif($int>=80){
	echo "您获得{$int}分，晋升段位钻石";
}elseif($int>=70){
	echo "您获得{$int}分，晋升段位铂金";
}elseif($int>=60){
	echo "您获得{$int}分，晋升段位白银";
}elseif($int>=50){
	echo "您获得{$int}分，晋升段位青铜";
}elseif($int < 50){
	echo "您获得{$int}分，晋升段位黑铁";
}else{
	echo "输入的数据有误，再看看呗";
}
/*
else
1，一般不作为最后一个条件，作为非法数据的处理
2，else之后绝对不要写()以及判断条件
*/

echo "<hr>";

// 数据有非法数据，需要判断更加严谨
// 如果数值是 -5 至105 之间 大于100和小于1都是非法数据
$int1 = mt_rand(-15,115);

if($int1 == 100){
	echo "您获得{$int1}分，晋升段位大师";
}elseif($int1>=90 && $int1<100){
	echo "您获得{$int1}分，晋升段位王者";
}elseif($int1>=80 && $int1<90){
	echo "您获得{$int1}分，晋升段位王者";
}elseif($int1>=70 && $int1<80){
	echo "您获得{$int1}分，晋升段位王者";
}elseif($int1>=60 && $int1<70){
	echo "您获得{$int1}分，晋升段位王者";
}elseif($int1>=50 && $int1<60){
	echo "您获得{$int1}分，晋升段位王者";
}elseif($int1<50 && $int1>=1){
	echo "您获得{$int1}分，晋升段位王者";
}else{
	echo "输入的数据{$int1}有误，再看看呗";
}