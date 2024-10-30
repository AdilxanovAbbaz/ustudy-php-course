<?php 
// первое задание

// $Jas = 13;

// if ($Jas < 18) {
//     echo "Доступ запрещен";
// } elseif ($age <= 65) {
//     echo "Доступ разрешен";
// } else {
//     echo "Пользователь пожилой";
// }



// второе задание


// $ochenka = 78;

// if ($ochenka < 50) {
//     echo "Неудовлетворительно";
// } elseif ($ochenka <= 69) {
//     echo "Удовлетворительно";
// } elseif ($ochenka <= 89) {
//     echo "Хорошо";
// } else {
//     echo "Отлично";
// }



// третье задание

// $san = 15;

// if ($san % 2 == 0) {
//     echo "Taq san";
// } else {
//     echo "Taq emes san";
// }




// четвертое задание

// $KunSani = 7;

// switch ($KunSani) {
//     case 1: echo "Понедельник"; break;
//     case 2: echo "Вторник"; break;
//     case 3: echo "Среда"; break;
//     case 4: echo "Четверг"; break;
//     case 5: echo "Пятница"; break;
//     case 6: echo "Суббота"; break;
//     case 7: echo "Воскресенье"; break;
//     default: echo "Некорректное значение";
// }




// пятое задание

// $number = 15;

// if ($number >= 10 && $number <= 20) {
//     echo "Число в диапазоне";
// } else {
//     echo "Число вне диапазона";
// }



// шестое задание 



// $password = "abbaz8889";

// if (strlen($password) > 8 && preg_match('/\d/', $password)) {
//     echo "Пароль принят";
// } else {
//     echo "Пароль не соответствует требованиям";
// }


// седьмое задание


// $a = 5;
// $b = 10;

// if ($a > $b) {
//     echo "Первое число больше";
// } elseif ($a < $b) {
//     echo "Второе число больше";
// } else {
//     echo "Числа равны";
// }



// восьмое задание



// $ay = 5;

// if ($ay >= 1 && $month <= 3) {
//     echo "Зима";
// } elseif ($ay >= 4 && $month <= 6) {
//     echo "Весна";
// } elseif ($ay >= 7 && $month <= 9) {
//     echo "Лето";
// } elseif ($ay >= 10 && $month <= 12) {
//     echo "Осень";
// } else {
//     echo "Некорректный номер месяца";
// }


// девятое задание



// $str1 = "Abbaz";
// $str2 = "abbaz";

// if ($str1 == $str2) {
//     echo "Строки идентичны";
// } else {
//     echo "Строки различаются";
// }

// десятое задание



// $login = "abbaz";
// $password = "8889";

// if ($login == "abbaz" && $password == "8889") {
//     echo "Авторизация успешна";
// } else {
//     echo "Неверный логин или пароль";
// }



// одинадцатое задание


// $jil = 2024;

// if (($jil % 4 == 0 && $jil % 100 != 0) || $jil % 400 == 0) {
//     echo "Год високосный";
// } else {
//     echo "Год не високосный";
// }


// двенадцатое задание


// $a = 10;
// $b = 5;
// $operation = '+';

// switch ($operation) {
//     case '+': echo $a + $b; break;
//     case '-': echo $a - $b; break;
//     case '*': echo $a * $b; break;
//     case '/': echo $b != 0 ? $a / $b : "Ошибка деления на ноль"; break;
//     default: echo "Некорректная операция";
// }


// тринадцатое задание


// $jas = 20;
// $kun = 3;

// if ($jas > 18 && $kun >= 1 && $kun <= 5) {
//     echo "Рабочий день";
// } else {
//     echo "Выходной";
// }


// четырнадцатое задание


// $a = 5;
// $b = 10;
// $c = 3;

// $min = $a;
// if ($b < $min) $min = $b;
// if ($c < $min) $min = $c;

// echo "Минимальное число: $min";

// пятнадцатое задание

$x = -3;
$y = 4;

if ($x > 0 && $y > 0) {
    echo "1-й";
}else{
    echo"2-й";
}
