<?php
echo "Hello World";
echo "\n";
$name ="I am Priyanka";

$income=20000;

echo "This is $name and my monthly income is $income";
echo "\n";

echo "$name she is Good girl";
echo "\n\n";

/*
Datatypes
1) String
2)Integer
3)Float
4)Boolean
5)object
6)Array
7)Null
*/
//Array --> 
$friend = array("Priyanka","sham","dham");
echo var_dump($friend);
echo "\n";

echo $friend[0];
echo "\n";
echo $friend[1];
echo "\n";
echo $friend[2];
echo "\n";

// NULL
$value =NULL;
echo var_dump($value);

//String
$firstname ="Mahesh is a Good Boy";
echo $firstname;
echo "The length of ". "my string is" . strlen($firstname);
echo "\n";

echo str_word_count($firstname);
echo "\n";

echo strrev($firstname);
echo "\n";

echo strpos($firstname, "Good");
echo "\n";
echo str_replace("Boy","Man",$firstname);


?>
