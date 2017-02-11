<?php
/**
 * Created by PhpStorm.
 * User: Animus
 * Date: 7/13/2016
 * Time: 2:38 PM
 */

/*
 * Below we are going to learn how to
 * code with more technical things such
 * as functions
 */


function myName(){
    echo "Christopher Downie.<br>";
}

echo 'My name is ';
myName();
/*
 *created a function called myName and inside the function was Christopher Downie
 * so outside of the function i called the function elsewhere and it outputted my name.
 */

$number1=2;
$number2=3;

function add($num1,$num2){    // created two temp variables called num1 and num2 and a add function
    echo($num1+$num2),'<br>';     // whatever is put into these variables should be added
}

echo 'the result is ',add($number1,$number2); // passed number1 and number 2 into the function and added them and then the function echo out the value


/*
 * below is a function with a return result
 */
function add2($num1,$num2,$num3){  // the function that is named add2 will accept 3 variables and add all of them and store it in result and then return the result
    $result=$num1+$num2+$num3;
    return $result;     // here is where it return the result of the calculation
 }

function add3 ($num1,$num2){
    $result=$num1-$num2;
    return $result;
}

echo add2(10,10,10) - 20,' is the result ';  // here i used the add2 function and i passed 10+10+10 in the function and it did it's calculation and return the result
// so in the end this calculation was basically 30-20=10


//below i am going to use two functions in an example, using add2 and add3 functions

echo add2(10,10,10) - add3(50,15),'<br>';   // used tge add2 functions to add the number and then the add3 function to subtract the value and then minus both the values and display them


$user_ip = $_SERVER['REMOTE_ADDR'];  // This is just a function used to get the user IP address

Function echo_address (){
    global $user_ip; // in order to use a variable inside a function you need to use the global keyword and then specify the variables

    $String='The user ip address is: '.$user_ip.'<br>';
    echo $String;
}
echo echo_address();  // Echo out the function

//*****************************************************
$some_text2 = 'this is some more text.';
$some_text = ' This is some text .';
$text_count = str_word_count($some_text,1,'.'); // the str_word_count function counts the amount of word in the sentence.
print_r($text_count); //most use this to print out

// the first parameter will just tell you how much words are in the sentence, the second can show you what array number it is assign to by using 1 for the second parameter
// you can also use 2 for the second parameter and it will tell you the position of the word in the array string itself
//the third parameter you can make a symbol be counted as a word

echo "<br>";

$shuffled = str_shuffle($some_text); // this method shuffles the characters of the sentence
echo $shuffled."it is mixed up <br>";

similar_text($some_text,$some_text2,$result2);  // this method checks for similarity, first two parameters are the things being compared and last is storage variable
echo ($result2 .' this is how similar the two strings are <br>');

$String_Length = strlen($some_text);  // counts the length of the string including the white spaces
echo($String_Length.'is the length of the string <br>');

$string_trim = trim($some_text);  // trims out the white spaces from the string
echo $string_trim.'<br>';

$food = array('bacon','bun','cheese'); // how you create an array
echo $food[2].'<br>'; // how you access contents of an array

$food2 = array('under'=>'100' , 'still_under'=>400, 'upper'=>600, 'more_above'=>900); // this is a associative array
print_r($food2); // in this associative array i have changed the key value to the specific names, under , still upper and more above
echo '<br>';

/*
 * below is a multi Dimensional array and we created an array within an array
 */
$food3 = array('healthy'=>array
                      ('happy', 'working' , 'driving '),

            'unhealthy'=>array
                      ('sad' , 'depressed' , 'hungry')  );

echo $food3['healthy'][0]; //  this is how you echo out the contents of the array
echo("<br>");

/*
 * below we use
 * a foreach statement to echo out the information in the array, not so important
 */

foreach($food3 as $element => $Inner_Element){
echo ($element.'<br>');

    foreach($Inner_Element as $item){
        echo ($item).'<br>';

}
}
/*
 * more advance things now
 *
 */






