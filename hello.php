<?php

$name = "ollie";
$age = 33;
$status = true;
$new_age = $age + 10;
$sentence = "{$name} knows PHP!";

var_dump($name);
var_dump($age);
var_dump($status);
var_dump($new_age);
var_dump($sentence);

$array = ["first", "second", "third" => "third"];

$fruit = ["banana", "apple", "cherry", "lime"]



for ($i = 1; $i <= 10; $i++) {

        if($i < 4) {
            $array[$i] = "a";
        } elseif ($i < 8) {
            $array[$i] = "b";
        } else {
            $array[$i] ="c";
        }

}

foreach ($array as $index => $value) { 
    echo "$index = $value.";
}
?>

    <ol>
        <li><?php $fruit[0] ?></li>
        <li><?php $fruit[1] ?></li>
        <li><?php $fruit[2] ?></li>
        <li><?php $fruit[3] ?></li>
    </ol>