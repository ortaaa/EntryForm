<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website development by PHP</title>
</head>
<style>
    *{
        margin: 10;
        padding: 10;
        box-sizing: border-box;
    }
    .container{
        max-width: 90%;
        background-color: red;
        margin: auto;
        padding: 15px;
    }
</style> 
<body>
    <div class="container">
    <h1>This is a web site development tutorial.</h1>
    <?php
    $a=1;
    while ($a <= 10) {
        echo "<br> The value of a is:  ";
        echo $a;
        $a++;
    }
    if ($a<=5) {
        echo "<br>You are right";
    }
    else {
        echo "<br>You are wrong";
    }
    function print5(){
    echo "<br>Yash Gupta from prism IT corp";
    }
    print5();

    function print_num($num){
        echo "<br> Your number is: ";
        echo $num;
    }
    print_num(25);
    
    ?>


<?php
$str = "<br>This is a string";
echo $str;
$length = strlen($str);
echo"The lengh of the string is: ". $length. "<br>The number of words is string is: ". str_word_count($str);
echo "Reverse of string is: ". strrev($str);
echo "<br>The position of s in the string is: ". strpos($str, "is");
?>
    
</div>
    
</body>


<body>
    <div class="container"></div>
    This is my new project. 
<?php
    define ('PI' , 3.14);
    echo "Hello World";
    echo "<br>";
    echo "My name is Yash Gupta";
    echo "<br>";
    echo "<h1> Yash Gupta </h1>";
    echo "<br>";
    echo PI;
    echo "<br>";
    
?>


<?php
    $variable1=2;
    $variable2=3;
    echo "The sum of variable1 and Variable2 is ";
    echo $variable1 + $variable2;
    echo "<br>";
    $var = "Yash Gupta is a string";
    echo var_dump($var)
     
    
    
?>
</body>

</html>