<!--You are given two linked-lists representing two non-negative integers.
The digits are stored in reverse order and each of their nodes contain a single digit. Add the two numbers and return it as a linked list.
Example:
Input: (2 -> 4 -> 3) + (5 -> 6 -> 4)
Output: 7 -> 0 -> 8
Explanation: 342 + 465 = 807-->
<?php

$first_array = [2,4,3];
$second_array = [5,6,4];
$sum_array = [];

//determine if one array has more digits than the other
$numOfDigitsFirst = count($first_array);
$numOfDigitsSecond = count($second_array);
$count = 0;

if ($numOfDigitsFirst > $numOfDigitsSecond) {
    $count = $numOfDigitsFirst;
} elseif ($numOfDigitsSecond > $numOfDigitsFirst) {
    $count = $numOfDigitsSecond;
} else {
    $count = $numOfDigitsFirst;
}

//getting sum of each element of array
for ($i = 0; $i < $count; $i++) {
    $sum_array[$i] = $first_array[$i] + $second_array[$i] + $sum_array[$i];
    if ($sum_array[$i] > 9) {
        $sum_array[$i] = $sum_array[$i] - 10;
        $sum_array[$i+1] = 1;
    }
}

print_r($sum_array);


