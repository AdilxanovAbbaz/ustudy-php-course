<?php
#1

// $number = (int)readline("Введите число: ");

// if ($number % 2 == 0) {
//     echo "Четное\n";
// } else {
//     echo "Нечетное\n";
// }


#2

// $age = 18;
// $result = ($age >= 18) ? "Совершеннолетний" : "Несовершеннолетний";
// echo $result;

#3
// $string = "Пример"; 
// $result = (strlen($string) < 10) ? "Короткая" : "Длинная";
// echo $result;


#4

// $hour = 15;
// $result = ($hour >= 6 && $hour < 18) ? "Днем" : "Ночью";
// echo $result;

#5
// $correctPassword = "abbaz8889";
// $inputPassword = readline("Введите пароль: ");
// $result = ($inputPassword === $correctPassword) ? "Доступ разрешен" : "Неверный пароль";
// echo $result;



#cikli

#1

// $totalSum = 0;

// for ($number = 1; $number <= 100; $number++) {
//     $totalSum += $number;
// }

// echo "Сумма всех чисел от 1 до 100: " . $totalSum;



#2

// for ($number = 1; $number <= 10; $number++) {
//     echo "Таблица умножения для $number:\n";
    
//     for ($i = 1; $i <= 10; $i++) {
//         echo "$number x $i = " . ($number * $i) . "\n";
//     }
    
//     echo "\n";
// }

#3
// $numbers = [5, 3, 8, 1, 4, 2, 10];

// $minValue = $numbers[0];

// foreach ($numbers as $number) {
//     if ($number < $minValue) {
//         $minValue = $number;
//     }
// }

// echo "Минимальное значение в массиве: " . $minValue;



#4
// function factorial($number) {
//     if ($number < 0) {
//         return "Факториал отрицательного числа не определён.";
//     }

//     $result = 1;
//     $i = 1;

//     while ($i <= $number) {
//         $result *= $i;
//         $i++;
//     }

//     return $result;
// }

// $number = 5; 
// echo "Факториал числа $number равен " . factorial($number);
#5
// $sum = 0;

// for ($i = 1; $i <= 50; $i++) {
//     if ($i % 2 == 0) {
//         $sum += $i;
//     }
// }

// echo "Сумма всех четных чисел от 1 до 50 равна $sum.";

#6
// $count = 10;

// do {
//     echo $count . "\n"; 
//     $count--; 
// } while ($count > 0);

#7
// $array = [3, 5, -2, 7, -4, 6]; 
// $firstNegative = null;
// $index = -1;

// foreach ($array as $i => $value) {
//     if ($value < 0) {
//         $firstNegative = $value;
//         $index = $i;
//         break; 
//     }
// }

// if ($firstNegative !== null) {
//     echo "Первое отрицательное число: $firstNegative, индекс: $index.";
// } else {
//     echo "Отрицательных чисел в массиве нет.";
// }
#8
// for ($i = 1; $i <= 20; $i += 2) {
//     echo $i . "\n"; 
// }
#9

// $string = "Пример строки";

// for ($i = 0; $i < strlen($string); $i++) {
//     echo $string[$i] . "\n";
// }

#10

// $array = [3, -1, 4, -2, 0, 5, -3]; 
// $positiveCount = 0;
// $negativeCount = 0;

// foreach ($array as $value) {
//     if ($value > 0) {
//         $positiveCount++; 
//     } elseif ($value < 0) {
//         $negativeCount++; 
//     }
// }

// echo "Количество положительных чисел: $positiveCount\n";
// echo "Количество отрицательных чисел: $negativeCount\n";

#11
// $i = 1;

// while ($i <= 10) {
//     if ($i % 2 == 0) { 
//         echo $i . "\n"; 
//     }
//     $i++;
// }

#12
// $number = 29; 
// $isPrime = true;

// if ($number <= 1) {
//     $isPrime = false;
// } else {
//     for ($i = 2; $i <= sqrt($number); $i++) {
//         if ($number % $i == 0) {
//             $isPrime = false;
//             break;
//         }
//     }
// }

// if ($isPrime) {
//     echo "$number является простым числом.";
// } else {
//     echo "$number не является простым числом.";
// }

#13
// $n = 10; 
// $fib = [0, 1]; 

// for ($i = 2; $i < $n; $i++) {
//     $fib[$i] = $fib[$i - 1] + $fib[$i - 2]; 
// }

// foreach ($fib as $number) {
//     echo $number . "\n"; 
// }

#14
// $number = (int)readline("Введите значение: "); 
// $sum = 0;
// $i = 1;

// if ($number < 1) {
//     echo "Введите число больше или равное 1.\n";
// } else {
//     do {
//         $sum += $i; 
//         echo "Сумма на шаге $i: $sum\n";
//         $i++; 
//     } while ($i <= $number);
// }
#15
// $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; 

// foreach ($array as $key => $value) {
//     if ($value % 2 == 0) {
//         $array[$key] = $value * 2;
//     } else {
//         $array[$key] = $value - 1; 
//     }
// }

// print_r($array);


##3
#1
// $targetValue = 10; 
// $currentValue = 0; 
// $iterations = 0;

// while ($currentValue < $targetValue) {
//     $currentValue++; 
//     $iterations++; 
// }

// echo "Количество итераций: $iterations\n";
#2
// $evenNumbers = []; 

// for ($i = 0; $i <= 20; $i += 2) {
//     $evenNumbers[] = $i; 
// }

// echo "Четные числа от 0 до 20: " . implode(", ", $evenNumbers) . "\n";
#3
// $value = 10;

// while ($value >= 0) { 
//     echo $value . "\n"; 
//     $value--; 
// }
#4
// $initialValue = 1; 
// $threshold = 100; 

// while ($initialValue <= $threshold) {
//     echo "Текущее значение: $initialValue\n";
//     $initialValue *= 2;
// }

// echo "Финальное значение: $initialValue\n"; 
#5
for ($i = 20; $i >= 0; $i -= 2) { 
    echo $i . "\n";
}
