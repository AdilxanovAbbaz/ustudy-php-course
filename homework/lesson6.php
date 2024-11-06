<?php
#1

// $array = [10, 20, 30, 40, 50];

// echo $array[0];  // Выводит: 10
// echo $array[3];  // Выводит: 40

#2
// $person = [
//     "name" => "John",
//     "age" => 30,
//     "city" => "New York"
// ];

// echo $person["name"];  // Выводит: John
// echo $person["age"];   // Выводит: 30
// echo $person["city"];  // Выводит: New York
#3
// $matrix = [
//     [1, 2, 3],    
//     [4, 5, 6],    
//     [7, 8, 9]     
// ];

// echo $matrix[0][0]; 
// echo $matrix[1][2];  
#4
//  $arrayObj = new ArrayObject([1, 2, 3, 4, 5]);
//  echo $arrayObj[0];

//  $arrayObj[0] = 10;
//  echo $arrayObj[0];

//  $arrayObj->append(6);
//  print_r($arrayObj);

//  $arrayObj->offsetUnset(2);
//  print_r($arrayObj);

//  $arrayObj = new ArrayObject([
//      "name" => "Alice",
//      "age" => 25,
//      "city" => "London"
//  ]);
//  echo $arrayObj["name"];

//  $arrayObj["age"] = 26;
//  echo $arrayObj["age"];

//  $arrayObj->offsetSet("country", "UK");
//  print_r($arrayObj);

//  $arrayObj->asort();
//  print_r($arrayObj);

//  $arrayObj->ksort();
//  print_r($arrayObj);

//  $copy = $arrayObj->getArrayCopy();
//  print_r($copy);

//  $arrayObj->exchangeArray([7, 8, 9]);
//  print_r($arrayObj);
#5
// $array = new SplFixedArray(5);

// $array[0] = 10;
// $array[1] = 20;
// $array[2] = 30;
// $array[3] = 40;
// $array[4] = 50;

// echo $array[0];  
// echo $array[2];  

// echo $array->getSize(); 

##2
#1
// $array = [10, 20, 30, 40, 50];

// foreach ($array as $value) {
//     echo $value . "\n";
// }
// 
#2
// $daysOfWeek = [
//     "Понедельник" => 1,
//     "Вторник" => 2,
//     "Среда" => 3,
//     "Четверг" => 4,
//     "Пятница" => 5,
//     "Суббота" => 6,
//     "Воскресенье" => 7
// ];

// echo $daysOfWeek["Среда"];
#3
// $employees = [
//     [
//         "name" => "Аббаз",
//         "age" => 13,
//         "position" => "PhpDeveloper"
//     ]
// ];

// foreach ($employees as $employee) {
//     echo "Имя: " . $employee["name"] . "\n";
//     echo "Возраст: " . $employee["age"] . "\n";
//     echo "Должность: " . $employee["position"] . "\n";
//     echo "\n";
// }
#4
// $randomNumbers = [];
// for ($i = 0; $i < 10; $i++) {
//     $randomNumbers[] = rand(1, 100);
// }
// sort($randomNumbers);

// print_r($randomNumbers);
#5
// $products = [
//     "Фрукты" => ["Яблоки", "Бананы"],
//     "Овощи" => ["Картофель", "Морковь"],
//     "Молочные продукты" => ["Молоко"],
//     "Напитки" => ["Чай"]
// ];

// foreach ($products as $category => $items) {
//     echo "Категория: $category\n";
//     echo "Продукты: " . implode(", ", $items) . "\n\n";
// }
#6
// $students = [
//     "Казбек" => ["Математика" => 4, "Физика" => 5, "Химия" => 3],
//     "Аббаз" => ["Математика" => 5, "Физика" => 4, "Химия" => 5],
//     "Мурат" => ["Математика" => 3, "Физика" => 4, "Химия" => 4]
// ];

// $subjectSums = [];
// $subjectCounts = [];

// foreach ($students as $name => $subjects) {
//     foreach ($subjects as $subject => $grade) {
//         if (!isset($subjectSums[$subject])) {
//             $subjectSums[$subject] = 0;
//             $subjectCounts[$subject] = 0;
//         }
//         $subjectSums[$subject] += $grade;
//         $subjectCounts[$subject]++;
//     }
// }

// foreach ($subjectSums as $subject => $sum) {
//     $average = $sum / $subjectCounts[$subject];
//     echo "Средний балл по предмету $subject: " . round($average, 2) . "\n";
// }
#7
// $fruits = ["apple", "banana", "orange"];
// $fruitsString = implode(", ", $fruits);

// echo $fruitsString;
#8
// $array = new SplFixedArray(5);

// for ($i = 0; $i < 5; $i++) {
//     $array[$i] = rand(1, 100);
// }
// print_r($array);
#9
// $countries = [
//     "Россия" => "Москва",
//     "США" => "Вашингтон",
//     "Франция" => "Париж",
//     "Германия" => "Берлин",
//     "Япония" => "Токио"
// ];

// function getCapital($country, $countries) {
//     if (array_key_exists($country, $countries)) {
//         return $countries[$country];
//     } else {
//         return "Страна не найдена!";
//     }
// }

// $countryName = "Франция";
// $capital = getCapital($countryName, $countries);

// echo "Столицу страны '$countryName' - это $capital.";
#10
// $chessBoard = [
//     ["r", "n", "b", "q", "k", "b", "n", "r"], 
//     ["p", "p", "p", "p", "p", "p", "p", "p"],
//     [" ", " ", " ", " ", " ", " ", " ", " "], 
//     [" ", " ", " ", " ", " ", " ", " ", " "],
//     [" ", " ", " ", " ", " ", " ", " ", " "], 
//     [" ", " ", " ", " ", " ", " ", " ", " "],
//     ["P", "P", "P", "P", "P", "P", "P", "P"], 
//     ["R", "N", "B", "Q", "K", "B", "N", "R"]  
// ];

// function printChessBoard($board) {
//     foreach ($board as $row) {
//         echo implode(" ", $row) . "\n";
//     }
// }

// printChessBoard($chessBoard);
#11
// $students = [
//     "Казбек" => 85,
//     "Аббаз" => 92,
//     "Мурат" => 78,
//     "Айгуль" => 91,
//     "Роман" => 88
// ];

// function getTopStudent($students) {
//     $topStudent = "";
//     $maxScore = 0;

//     foreach ($students as $name => $score) {
//         if ($score > $maxScore) {
//             $maxScore = $score;
//             $topStudent = $name;
//         }
//     }

//     return $topStudent;
// }

// $topStudent = getTopStudent($students);

// echo "Студент с наивысшим баллом: $topStudent\n";
// echo "Баллы: " . $students[$topStudent];
#12
// $names = ["Иван", "Алексей", "Мария", "Сергей", "Анна"];

// sort($names);

// foreach ($names as $name) {
//     echo $name . "\n";
// }
#13
// $vacationDates = [
//     "Казбек" => ["2024-06-15", "2024-07-01"],
//     "Аббаз" => ["2024-05-10", "2024-06-20"],
//     "Мурат" => ["2024-07-05", "2024-08-10"],
//     "Айгуль" => ["2024-05-15", "2024-06-30"],
//     "Роман" => ["2024-06-01", "2024-07-15"]
// ];

// foreach ($vacationDates as $name => $vacations) {
//     echo "Сотрудник: $name\n";
//     echo "Отпуск: " . implode(" - ", $vacations) . "\n\n";
// }
#14
// $numbers = [12, 7, 34, 9, 56, 23, 44, 18, 77, 8];

// foreach ($numbers as $number) {
//     if ($number % 2 == 0) {
//         echo $number . "\n";
//     }
// }
#15
// $months = [
//     "Январь" => 31,
//     "Февраль" => 28, 
//     "Март" => 31,
//     "Апрель" => 30,
//     "Май" => 31,
//     "Июнь" => 30,
//     "Июль" => 31,
//     "Август" => 31,
//     "Сентябрь" => 30,
//     "Октябрь" => 31,
//     "Ноябрь" => 30,
//     "Декабрь" => 31
// ];

// echo "Количество дней в феврале: " . $months["Февраль"];
#16
// $schedule = [
//     "Понедельник" => [
//         ["Время" => "08:00", "Предмет" => "Математика"],
//         ["Время" => "10:00", "Предмет" => "Физика"],
//         ["Время" => "12:00", "Предмет" => "Программирование"]
//     ],
//     "Вторник" => [
//         ["Время" => "08:00", "Предмет" => "Английский язык"],
//         ["Время" => "10:00", "Предмет" => "Химия"],
//         ["Время" => "12:00", "Предмет" => "История"]
//     ],
//     "Среда" => [
//         ["Время" => "08:00", "Предмет" => "Биология"],
//         ["Время" => "10:00", "Предмет" => "География"],
//         ["Время" => "12:00", "Предмет" => "Математика"]
//     ],
//     "Четверг" => [
//         ["Время" => "08:00", "Предмет" => "Физика"],
//         ["Время" => "10:00", "Предмет" => "Литература"],
//         ["Время" => "12:00", "Предмет" => "Программирование"]
//     ],
//     "Пятница" => [
//         ["Время" => "08:00", "Предмет" => "Математика"],
//         ["Время" => "10:00", "Предмет" => "Физкультура"],
//         ["Время" => "12:00", "Предмет" => "Математика"]
//     ]
// ];

// echo "Расписание для Понедельника:\n";
// foreach ($schedule["Понедельник"] as $lesson) {
//     echo $lesson["Время"] . " - " . $lesson["Предмет"] . "\n";
// }
#17
// $numbers = [12, 7, 34, 9, 56, 23, 44, 18, 77, 8];

// function sumArray($array) {
//     $sum = 0;
//     foreach ($array as $number) {
//         $sum += $number; 
//     }
//     return $sum;
// }

// $totalSum = sumArray($numbers);

// echo "Сумма всех элементов массива: " . $totalSum;
#18
// $books = [
//     ["1984", "Джордж Оруэлл", 1949],
//     ["Преступление и наказание", "Фёдор Достоевский", 1866],
//     ["Властелин колец", "Дж. Р. Р. Толкин", 1954],
//     ["Унесенные ветром", "Маргарет Митчелл", 1936],
//     ["Гарри Поттер и философский камень", "Дж. К. Роулинг", 1997]
// ];

// $afterYear = fn($books, $year) => array_filter($books, fn($b) => $b[2] > $year);

// foreach ($afterYear($books, 1950) as $book) {
//     echo "Название: $book[0], Автор: $book[1], Год: $book[2]\n";
// }
#19
// $teams = [
//     ["Команда" => "Барселона", "Страна" => "Испания", "Игроки" => ["Месси", "Суарес", "Неймар"]],
//     ["Команда" => "Манчестер Юнайтед", "Страна" => "Англия", "Игроки" => ["Роналду", "Погба", "Кавани"]],
//     ["Команда" => "Бавария", "Страна" => "Германия", "Игроки" => ["Левандовски", "Мюллер", "Гнабри"]],
//     ["Команда" => "Ювентус", "Страна" => "Италия", "Игроки" => ["Роналдо", "Дибала", "Кьеза"]],
//     ["Команда" => "ПСЖ", "Страна" => "Франция", "Игроки" => ["Мбаппе", "Неймар", "Месси"]]
// ];

// foreach ($teams as $team) {
//     echo "Команда: {$team['Команда']}, Страна: {$team['Страна']}, Игроки: " . implode(", ", $team['Игроки']) . "\n";
// }
#20
// $numbers = [1, 2, 3, 4, 2, 3, 5, 1, 6, 7, 5];

// $uniqueNumbers = array_unique($numbers);

// print_r($uniqueNumbers);
