<?php
include 'Stack.php';

$arrayInt = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

$stack = new Stack(10);
try {
    foreach ($arrayInt as $value) {
        $stack->push($value);
    }
    foreach ($arrayInt as $index => $value) {
        $arrayInt[$index] = $stack->pop();
    }
    echo implode(', ', $arrayInt);
} catch (Exception $exception) {
    echo $exception->getMessage();
}