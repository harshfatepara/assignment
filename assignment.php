<?php
// 1--> calculate percentage of five subject
// $a=readline("enter marks of maths:");
// $b=readline("enter marks of physic:");
// $c=readline("enter marks of science:");
// $d=readline("enter marks of tach:");
// $e=readline("enter marks of dsa:");
// if($a>100 || $b>100 || $c>100 || $d>100 || $e>100){
//     if($a<=0 || $b<=0 || $c<=0 || $d<=0 || $e<=0){
//         echo("invalid marks ");
//     }
//     else{
//         echo("please enter less than 100");
//     }
// }
// else{

//     $avg=($a+$b+$c+$d+$e)/5;
//     echo("your average is $avg");
// }

// 2--> using switch case find week days and ckeck leap year


// $a = readline("Please enter leap year: ");
// if($a%4==0 || $a%400==0){
//     echo "leap year";
// }
// elseif($a%100==0){
//     echo "not leap year";
// }
// else{
//     echo "not leap year";
// }

// days return programm
// $day=readline("please enter number");
// switch ($day) {
//     case 1:
//         echo("monday");
//         break;
//     case 2:
//         echo("tuesday");
//         break;
//     case 3:
//         echo("wednesday");
//         break;
//     case 4:
//         echo("thrusday");
//         break;
//    case 5:
//         echo("friday");
//         break;
//    case 6:
//         echo("saturday");
//         break;
//    case 2:
//         echo("sunday");
//         break;
//     default:
//         echo("please enter number between 1to 7");
//         break;
// }

//3--> find the largest value in three numbers using ternary operator

// $a = readline("first number");
// $b = readline("second number ");
// $c = readline("third number ");
// $max=($a>$b)?($a>$c?$a:$c):($b>$c?$b:$c);
// echo $max;


//4--> print fibonacci series
// $a = 0;
// $b = 1;
// echo $a." ".$b." ";
// for( $i = 0; $i < 8; $i++ ) {
//     $temp = $a + $b;
//     $a = $b;
//     $b = $temp;
//     echo$b." ";
// }


//5--> check the number is armstrong or not
// $Value = 370;
// $number = $Value;
// $n1 = (int)($number % 10);
// $number = $number/10;
// $n2 = (int)($number %10);
// $number = $number/10;
// $n3 = (int)($number %10);

// $cube = ($n1*$n1*$n1)+ ($n2*$n2*$n2)+ ($n3*$n3*$n3);
// if ($Value == $cube){
//     echo "The number is armstrong number";
// }
// else{
//     echo "Not armstrong number";
// }


//6--> print star pattern

// $rows = 5;
// for( $i = 0; $i <=$rows; $i++ ) {    
//     if($i == 0 || $i == $rows) {
//         for($j = 0;$j<$rows;$j++){

//             echo "* ";
//         }
//         echo"".PHP_EOL;
//     }
//     else{
//         echo "*".PHP_EOL;
//     }
// }

//-->7 out of code
// $a = '1';
// $b = &$a;// this line show that when we change the values of b it will affect on a 
// $b = "2$b"; 
// echo $a.PHP_EOL;
// echo $b;
// output of this 21 21;


//-->8 print number pattern
// for($i=2;$i<=3;$i++)
// {
// 	for($j=1;$j<=3;$j++)
// 	{
// 	echo $i;
//     $i=$i+4;
   
// 	}	 
//     echo "".PHP_EOL;
	
// }
// for($i=3;$i<=3;$i++)
// {
// 	for($j=1;$j<=3;$j++)
// 	{
// 	echo $i;
//     $i=$i+4;
   
// 	}	 
//     echo "".PHP_EOL;
	
// }
// for($i=4;$i<=4;$i++)
// {
// 	for($j=1;$j<=3;$j++)
// 	{
// 	echo $i;
//     $i=$i+4;
   
// 	}	 
//     echo "".PHP_EOL;
	
// }


//-->9 find unique number from array
// $Numbers = array(45,85,56,45,52,56,85,45,52,47,52,54,56,45);
// print_r (array_unique($Numbers));

// --10> print random number of array
// $Numbers = array(45,85,56,45,52,56,85,45,52,47,52,54,56,45);
// print_r (array_rand($Numbers,2));


// --11> check even odd number without using loop or condition
// $arr = ["Even", "Odd"]; 
// $input = 4;
// echo ($arr[$input % 2]);



//--12> store number five numbers in array and display sum of them
// $numbers = array();
// $sum = 0;

// for ($i = 1; $i <=5; $i++){
//     $number = readline("Please enter number : ");
//     $sum = $sum + $number;
//     array_push($numbers, $number);
// }  
// print_r($numbers);
// echo $sum;

// for($i =1 ; $i <= 3; $i++){
//     for($j = 2; $j >= $i; $j--){
//         echo " ";
//     }
//     for($k = 1; $k <= $i; $k++){
//         echo "* ";
//     }
//     echo "".PHP_EOL;
// }


?>