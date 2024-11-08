<!-- 1) наследование 
2) полеморизм
3) инкапсуляция
класс - это для создание обьекта как шаблон либо прототип 
Доступ модификаторов 
метод это функция обычный -->


<?php
#1
// function factorial($n) {
//     if ($n < 0) {
//         return "Ошибка: факториал для отрицательных чисел не существует.";
//     }
//     $result = 1;
//     for ($i = 1; $i <= $n; $i++) {
//         $result *= $i;
//     }
//     return $result;
// }

// echo factorial(5); 
// echo "\n";
// echo factorial(0);
#2
// function isPalindrome($string) {
//     $string = str_replace(' ', '', $string);
//     $string = strtolower($string);
//     return $string === strrev($string);
// }

// echo isPalindrome("радар") ? 'true' : 'false';
// echo "\n";
// echo isPalindrome("казак") ? 'true' : 'false';
// echo "\n";
// echo isPalindrome("пример") ? 'true' : 'false';
#3
// function gcd($a, $b) {
//     while ($b != 0) {
//         $temp = $b;
//         $b = $a % $b;
//         $a = $temp;
//     }
//     return $a;
// }

// echo gcd(54, 24); // Выведет 6

#4
// function average($array) {
//     if (empty($array)) {
//         return null;
//     }
//     return array_sum($array) / count($array);
// }

// echo average([1, 2, 3, 4, 5]); // Выведет 3
// echo "\n";
// echo average([]); // Выведет null

#5
// function celsiusToFahrenheit($celsius) {
//     return $celsius * 9 / 5 + 32;
// }

// echo celsiusToFahrenheit(0);  
// echo "\n";
// echo celsiusToFahrenheit(25); 
#6
// function countVowels($string) {
//     $vowels = 'aeiouAEIOU';
//     $count = 0;
//     for ($i = 0; $i < strlen($string); $i++) {
//         if (strpos($vowels, $string[$i]) !== false) {
//             $count++;
//         }
//     }
//     return $count;
// }

// echo countVowels("Hello World"); 
// echo "\n";
// echo countVowels("PHP is fun!");
#7
// function isPrime($n) {
//     if ($n <= 1) {
//         return false;
//     }
//     for ($i = 2; $i <= sqrt($n); $i++) {
//         if ($n % $i == 0) {
//             return false;
//         }
//     }
//     return true;
// }

// echo isPrime(7) ? 'true' : 'false';
// echo "\n";
// echo isPrime(10) ? 'true' : 'false';
#8
// function fibonacci($n) {
//     $fib = [0, 1];
//     for ($i = 2; $i < $n; $i++) {
//         $fib[] = $fib[$i - 1] + $fib[$i - 2];
//     }
//     return array_slice($fib, 0, $n);
// }

// print_r(fibonacci(10)); 
#9
// function minMax($array) {
//     return ['min' => min($array), 'max' => max($array)];
// }

// print_r(minMax([3, 1, 42, 7])); 
#10

// function formatName($firstName, $lastName) {
//     return ucfirst(strtolower($firstName)) . ' ' . ucfirst(strtolower($lastName));
// }

// echo formatName("Abbaz", "Adilxanov"); 

#11
// function wordCount($string) {
//     return str_word_count($string);
// }

// echo wordCount("Hello world! How are you?");
#12
// function hammingDistance($str1, $str2) {
//     if (strlen($str1) !== strlen($str2)) {
//         return null;
//     }
//     $distance = 0;
//     for ($i = 0; $i < strlen($str1); $i++) {
//         if ($str1[$i] !== $str2[$i]) {
//             $distance++;
//         }
//     }
//     return $distance;
// }

// echo hammingDistance("karolin", "kathrin"); 
#13
// function uniqueCount($array) {
//     return count(array_unique($array));
// }

// echo uniqueCount([1, 2, 2, 3, 4, 4, 4]); 
#14
// function generatePassword($length) {
//     $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
//     $password = '';
//     for ($i = 0; $i < $length; $i++) {
//         $password .= $characters[random_int(0, strlen($characters) - 1)];
//     }
//     return $password;
// }

// echo generatePassword(12); 
#15

function charCount($string) {
    $count = [];
    for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];
        if (isset($count[$char])) {
            $count[$char]++;
        } else {
            $count[$char] = 1;
        }
    }
    return $count;
}

print_r(charCount("hello")); 








