<?php 

// 1) ********************* comparison operator *********************

/* PHP-তে comparison operator কী?

$a = 10 এবং $b = "10" এর জন্য == এবং === ব্যবহারের উদাহরণ দেখাও এবং ফারাক বোঝাও।

*/

// Ans: PHP-তে comparison operator (তুলনামূলক অপারেটর) দিয়ে দুইটি মানের মধ্যে তুলনা করা হয়।

// উদাহরণ: ==, ===, !=, !==, >, <, >=, <= ইত্যাদি।

echo "comparison operator //";
echo '<br>';
echo '<br>';

$a = 10;
$b = "10";

// == → মান একই কিনা দেখে (টাইপ দেখে না)
// == (Equal) Operator 
if($a == $b){
    echo "True<br>";
} else{
    echo "false<br>";
}

// === → মান ও টাইপ দুটোই একই কিনা দেখে
// === (Identicall) Operator

if($a === $b){
    echo "Thur<br>";
} else{
     echo "false<br>";
}
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// 2) ********************* logical operator *********************

/*  Q: Logical operator কেন ব্যবহার করা হয়?
    একটি কোড লিখো — যেখানে age >= 18 AND nationality = "BD" হলে “Eligible for NID” print করবে।
*/

// Ans: PHP-তে logical operator ব্যবহার করা হয় একাধিক শর্ত (conditions) একসাথে যাচাই করার জন্য।

/* যেমন:

&& বা and → দুইটি শর্তই সত্য হলে true

|| বা or → যেকোনো একটি শর্ত সত্য হলে true

! → শর্তের বিপরীত মান দেয় (not)

*/

echo "logical operator //";
echo '<br>';
echo '<br>';

$age = 20;
$nationality = "BD";

if($age >= 18 && $nationality == "BD"){
    echo "Eligible for IND";
} else {
    echo "Not eligible for IND";
}

echo '<br>';echo '<br>';

if(!($age >= 18)){
    echo "true";
} else {
    echo "false";
}
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// 3) ********************* Ternary Operator *********************

/* Q: Ternary operator কী?
    কোন পরিস্থিতিতে ব্যবহার করা হয়?
    
একটি কোড লিখো—
$marks = 40;
marks >= 33 হলে “Pass” না হলে “Fail” print করবে ternary দিয়ে।
*/


// Ans: Ternary Operator এ — এটা PHP-তে shortcut if-else বললেই চলে।

# সিনট্যাক্স:
        // (condition) ? (value_if_true) : (value_if_false);

        
echo "Ternary operator //";
echo '<br>';
echo '<br>';


$marks = 30;
echo ($marks >= 33) ? "Pass" : "fail";
echo '<br>';
echo '<br>';


// if($marks >= 33){
//     echo "pass";
// } else {
//     echo "fail";
// }

$age = 20;
$nationality = "BD";

echo ($age >= 18 && $nationality == "BD")
    ? "Eligible for the NID"
    : "Not Elibigble for the NID";
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


// 4) ********************* Increment / Decrement *********************

// Ans: এগুলো PHP-তে মান ১ করে বাড়ানো বা কমানোর জন্য ব্যবহৃত হয়।


echo "Increment / Decrement //";
echo '<br>';
echo '<br>';


// 1. Increment Operator (++)
# একটি ভেরিয়েবলের মান ১ করে বাড়ায়।


// 2. Decrement Operator (--)
# একটি ভেরিয়েবলের মান ১ করে কমায়।

// Increment / Decrement দুই দরনের 
    // এক pre-inIncrement ++$x
    // দুই pre-decrement --$x

    // এক post-inIncrement $x++
    // দুই post-decrement $x--


$x = 5;

echo "Original value: $x<br>";
echo '<br>';

// pre-increment

echo "Pre-increment (++/$x): " . ++$x . "<br>";
// Post-increment
echo "Post-increment ($x/++): " . $x++ . "<br>";
echo '<br>';

// pre-decrement

echo "Pre-decrement (--/$x): " . --$x . "<br>";
echo '<br>';

// Post-decrement
echo "Post-decrement ($x/--): " . $x-- . "<br>";
echo --$x;

echo '<br>';echo '<br>';echo '<br>';echo '<br>';

// 5) ********************* Switch Statement *********************

/*Q: একটি switch statement লেখো যেখানে
        $day = 3;
        1 = Saturday
        2 = Sunday
        3 = Monday
        4 = Tuesday
        ডিফল্ট case: "Invalid Day"
*/

// Ans: 

echo "Switch Statement //";
echo '<br>';
echo '<br>';


$day = 4;

switch($day){
    case 1:
        echo "Saturday";
        break;
    case 2: 
        echo "Sunday";
        break;
    case 3:
        echo "Monday";
        break;
    case 4:
        echo "Tuesday";
        break;
    default: 
        echo "Invalid day";
}

echo '<br>';
    echo '<br>';echo '<br>';
    echo '<br>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>
     <!-- 6) ********************* Dynamic Content ********************* -->

     <!-- Dynamic Content বলতে কী বোঝায়? -->

    <!-- Dynamic Content মানে এমন কনটেন্ট যা PHP কোডের মাধ্যমে পরিবর্তনযোগ্য বা স্বয়ংক্রিয়ভাবে তৈরি হয়।
    অর্থাৎ, HTML-এর মধ্যে PHP ব্যবহার করে variable, calculation, বা database data দেখানো যায়। -->

    <?php
    
    echo "Dynamic Content //";
    echo '<br>';


    $name = "Meheraj Hossen.";
    
    ?>


    <p>Hello, my name is: <?php echo $name; ?> </p>

</body>
</html>



<?php 

// 7) ********************* for loop *********************
/* 
   Q: Loop (for loop)
    Q: For loop ব্যবহার করে 1 থেকে 10 পর্যন্ত সংখ্যাগুলো print করো।
*/


// Ans: for loop এমন একটি লুপ যা নির্দিষ্ট সংখ্যক বার কোড পুনরাবৃত্তি করে (repeat করে)।


// সিনট্যাক্স:

/* for (initialization; condition; increment/decrement) {
         কোড ব্লক
    } 
*/echo '<br>';echo '<br>';echo '<br>';echo '<br>';  

    echo "for loop //";
    echo '<br>';
    echo '<br>';


for($i=1; $i<=10; $i++){
    echo "Number : $i <br>";
}
echo '<br>';
    echo '<br>';
echo '<br>';
    echo '<br>';




// 8) ********************* Loop + Condition *********************\

/* 
Nested Loop (Pattern)
Q: Nested loop ব্যবহার করে নিচের pattern তৈরি করো:

*
**
*
**
***
*/

// Ans: 

    echo "for loop //";
    echo '<br>';
    echo '<br>';


for ($i = 1; $i <= 5; $i++) {
    // line 1,2,3,4,5 এর জন্য 
    if ($i == 1 || $i == 3){
        $stars = 1;
    } elseif($i == 2 || $i == 4) {
        $stars = 2;
    } else {
        $stars = 3;
    }
    
    for ($j = 1; $j <= $stars; $j++) {
        echo "*";
    }
    echo "<br>";
}









?>
