<meta charset="Utf-8">

<?php
//
//первое задание
//
$a=7;//создает переменную и ее значение
if($a>14)//условия сравнения
    {
	echo "Переменная больше чем число";//выводит текст,если результат верный
    }
	else
	{
	echo "Переменная меньше чем число";//выводит текст,если результат не верный
	}	
//
//второе задание
//
echo"</br>";
$logik="true";//создает переменную и ее значение
if(is_string($logik))//создает условие которе проверяет имеет ли переменная тип строкового литерала 
{
	echo "yes";//выводит текст если результат верный
}
else
{
	echo "no";//выводит текст если результат не верный
}
echo"</br>";
$logik="true";//создает переменную и ее значение 
if(is_double($number))//создает условие которе проверяет имеет ли переменная тип вещественного числа
{
	echo "yes";//выводит текст если результат верный
}
else
{
	echo "no";//выводит текст если результат не верный
}
//
//Третье задание
//
echo"</br>";
$newArray=array(
       "Текст1",
	   "Текст2",
	   "Текст3",
);
echo "<pre>";
//
//22222
//
echo "</br>";
$a=10;
$b="10";
if($a==$b){
	echo "ravni";
}
else
{
	echo "ne ravni";
}
echo "</br>";
if($a===$b){
	echo "ravni";
}
else
{
	echo "ne ravni";
}
//
//333333333333333
//

echo "\x8A","\xBS","\xB0","\xA7","\xB6\r";
 $int=0;
 $str="";
 if ($int===$str)
	 echo "ravni";
 else
	 echo "ne ravni"
 //
 //254242
 //
echo "</br>";
$a="";
$b=0;
if($a==$b){
	echo "ravni";
}
else
{
	echo "ne ravni";
}
echo "</br>";
if($a==$b){
	echo "ravni";
}
else
{
	echo "ne ravni";
}






?>	