<?php
#1
// $name = "Abbaz";
// $age = 13;
// $country = "Karakalpakstan";

// echo "Меня зовут $name, мне $age лет, я живу в $country.";
#2
// $productName = "Iphone 16 pro max";
// $quantity = 10;
// $price = 1499.99;
// $inStock = true;

// echo gettype($productName) . "\n";  
// echo gettype($quantity) . "\n";  
// echo gettype($price) . "\n";        


// echo $productName . "\n";
// echo $quantity . "\n";
// echo $price . "\n";
// echo $inStock . "\n";
#3
// $FirstNumber = 10;
// $SecondNumber = 2.5;

// echo "Сложение: " . ($FirstNumber + $SecondNumber) . "\n";
// echo "Вычитание: " . ($FirstNumber - $SecondNumber) . "\n";
// echo "Умножение: " . ($FirstNumber * $SecondNumber) . "\n";
// echo "Деление: " . ($FirstNumber / $SecondNumber) . "\n";

#3
// $str = "456.78";
// $floatVal = (float) $str;
// $intVal = (int) $str; 

// echo "Число с плавающей точкой: $floatVal\n";
// echo "Целое число: $intVal\n";              

// $anotherStr = "789.99";  
// $anotherFloatVal = (float) $anotherStr;  
// $anotherIntVal = (int) $anotherStr;  

// echo "Еще одно число с плавающей точкой: $anotherFloatVal\n"; 
// echo "Еще одно целое число: $anotherIntVal\n";            
#5
$variables = [
    100,
    "Hello, world!",
    true,
    [1, 2, 3],
    new stdClass(),
    3.14,
];

foreach ($variables as $var) {
    if (is_int($var)) {
        echo "$var — это целое число.\n";
    } elseif (is_string($var)) {
        echo "'$var' — это строка.\n";
    } elseif (is_bool($var)) {
        echo "$var — это булевское значение.\n";
    } elseif (is_array($var)) {
        echo "Это массив.\n";
    } elseif (is_object($var)) {
        echo "Это объект.\n";
    } elseif (is_float($var)) {
        echo "$var — это число с плавающей запятой.\n";
    } else {
        echo "Это другой тип данных.\n";
    }
}
