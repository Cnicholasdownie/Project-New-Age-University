<?php
/**
 * Created by PhpStorm.
 * User: Animus
 * Date: 7/10/2016
 * Time: 12:27 PM
 */

$num1=10 + 10;     //This is how you create a variable and you can also do math calculations as usual
$num2=30;
$num3=30;
echo "$num1 ".'is the total if the calculation ';

$result= (30+30) / 10;  // When you are doing maths in PHP with more than two objects ensure that you use brackets to show what should be calculated first of you will get wrong result

echo "$result";   //showing the result of the calculation

echo "<input type =\"text\" name =\"name\" value=\"html in php\">"; //We are using html in php so it process the " as a end for the code. by using backslash \ we tell the computer to ignore this end
echo '<input type ="text" name ="name" value="html in php  ">';  // What we can also do is change the outsides end marks to single quotations
/*
 * as you can see
 * in the top example of html in php where i use the backslash to ignore the ends, it did not work on the value attribute
 * so this is why we sometimes need to change the entire opening and closing quotations
 */

if ($num1==10)         // Where we learn how to do a if statement, very simular to others
    {
    echo "This is true";   // If num1 is equal to 10 then output "This is true" if not output "this is false"
    }

elseif ($num1 ==4){                       // the else if comparison give us the option of adding another choice and we can add as much elseif as we want
    echo "This is acually equal to 4";
}

elseif ($num1>=3 || $num1<10){                // or operator
    echo "in this example we use the less than and greater than and or operator";
}

elseif ($num1 ==14 && $num2<2){  // and operator
    echo "This is to complex ";
}

elseif($num1 != $num2){  // not equal
    echo"This will never run";
}
else
    {
        $num1=$num1+$num3;  // since the statement is false as you can see we then did a math calculation and outputted the results
    echo "This is false, and it is actually equal to $num1";
    }

/*
 * Above was all about if statements
 * now we move on to other things
 */

while ($num2 < 40){    // While this condition is not met the computer will continue to print this is less than 40
    echo "This is less than 40 <br>";
    $num2++; //This ++ increment the value by 1
}

do {   // Will do the following until it has met the while loop
echo "This is more than 30 <br>";
$num2--;   // remove a value of 1 each time
} while($num2>=30);

for ($numtemp=1;$numtemp<=10;$numtemp++){  // First is making the variable, second is the condition, and third is the increment
    echo "Not yet equal to ten <br> <br>";
}

switch ($num3){   // This is the variable that you want to check
    case '1': echo "hello world "; break; // if it is equal to 1 then echo the following and then stop
    case  2: echo "hello world"; break;
    case '3':      // by not using break we are telling the program to check THIS OR THIS and then break
    case '31': echo "This is 30"; break;
    default : // if the following does not meet any of the cases above then it will default to this default statement
        echo "the number entered is not listed <br>";
        break;
}
/*
 * As you can see in the above case statements the program also converts the variable
 * number into a string. so even if i don't put '' around the number for it to be a string the computer still reads
 * it as a number
 */

echo 'hello';
// die();  // by using this die statement the program never reaches the world output because i killed the program at die, // put a comment in front it so it don't affect my program
echo 'world <br>';

@mysql_connect('localhost','root','') || die('could not connect to the database');  // this is how you connect to a mysql database,
echo "Connected";
 // first parameter is the hosting which in this case is local the second is the user and the third is empty it is going to connect or die
// and echo the code for die.

/*
 * beyond this point it gets complicated so i am going to use another php page
 */

