<a href="/">Главная</a><br><br>
<a href="https://youtube.com/live/DzLTwk0SS-8" target="_blank">Урок 4 - Видео</a><br><br>


<!--<a href="/pages/variables.php">Variables</a>-->
<!--<br>-->
<!--<a href="/pages/conditions.php">Conditions</a>-->

<?php

echo "<br>";
// Встроенные функции
// echo('!!!');
// var_dump('dsfdsf');
// rand(0, 5); //  получить рандомное число от 0 - 5

// Пользовательские функции
$a = 1;
$b = 2;
// вызов функции
sum($a, $b);

// определение функции
function sum($num1, $num2) {
    $sum = $num1 + $num2;
    $result = $sum / 2;
    echo $result;
}
echo "<br>";
echo "<br>";



// Функция принимает две строки и выводит их через пробел
function sayMyName($name, $lastName) {
    echo "$name $lastName";
    echo "<br>";
}
$fName = 'Rom';
$lName = 'Belov';
sayMyName($fName, $lName); // Выведет: Rom Belov

$n = 'Вася';
$f = 'Пупкин';
sayMyName($n, $f); // Выведет: Вася Пупкин
echo "<br>";
echo "<br>";

// Функция принимает число и в зависимости от него выводит или 3 или 1
function getRandomNum($num) {
    if ($num > 5) {
       echo 3;
    } else {
        echo 1;
    }
}
$xxx = 11;
getRandomNum($xxx); // Выведет 3
getRandomNum(2); // Выведет 1
echo "<br>";
echo "<br>";


// Функция принимает день недели и в зависимости от него ВЕРЕНЕТ некоторую строку
function getInstruction($day) {
    $result = '';
    if ($day === 'monday') {
        $result = 'Созвоны целый день!';
    }
    else if ($day === 'tuesday') {
        $result = 'Кодинг после обеда!';
    }
    else {
        $result = 'Просмотр мультиков!';
    }
    return $result;
}

$myDay = 'monday';
$result = getInstruction($myDay); // Вернет "Созвоны целый день!" и положит в переменную $result
echo $result;
echo "<br>";
echo "<br>";


// Функция принимает день.
// Генерирут внутри себя рандомное число.
// При определенных обстоятельствах приконкатенирует "Yra!" к числу
// В зависимости от дня выдаст определенные инструкции,
// которые приконкатенирует к финальному результату
function getRandSomething($day) {
    $randomNumber = rand(0, 2000);
    $finalResult = $randomNumber * 2 / 12;

    if ($randomNumber > 1000) {
        $finalResult = $finalResult . ' ' . 'Yra!';
    }

    $instruction = getInstruction($day);
    return $finalResult . ' --------- ' . $instruction;
}

$randomN = getRandSomething('tuesday');
echo $randomN;
echo "<br>";
echo "<br>";

// ДЗ

// Напишите функцию "могуПойтиВБар". На вход рпинимает параметр день недели.
// Если день недели пятница то функция ВОЗВРАЩАЕТ true. Во всех других случиях ВОЗВРАЩАЕТ false
// Вызовите функцию, слодите результата вызова функции в переменную, и выведете на экран

// Напишите функцию "посчитатьКоличествоОкон" в прямоугольном одноэтажном доме.
// На вход функция примимет два параметра:
// Длинна стены А в метрах, и длинна второй стены B в метрах.
// У каждого дома по две стены А и по две B.
// На каждые 3-и метра стены А приходится 1 окно.
// На каждые 4-е метра стены B приходится 1 окно.
// Если одна стена нулевой длинны то у нее нет окон.
// Функция должна всегда отдавать число(количество окон). На вход всегда принимет числа.
// Пример 1: func(3, 4) // вернет  4 (на каждой из четырех стен по одному окну)
// Пример 2: func(0, 4) // вернет  2
// Пример 2: func(6, 8) // вернет  8
// Повызывйте функцию с разными параметрами, проверте что бы все работало согласно условиям задачи

// Ниже задача которую я уже ранее задавал.
// Перепишите код так чтобы задача была решена с использованием пользовательской функции или функций.
// Есть переменная день недели и переменная текущий час равная например 20.
// Напишете программу которая будет проверять эти переменные и если:
// они содержат понедельник 20 и четверг 21 то программа выводит - иду на курсы.
// Если выпадает среда с любым временем то -  сижу дома ничего не делаю.
// Если пятница и время больше 18 то - иду в бар.
// Если пятница и время 2 - ищу дорогу домой.
// В остальные дни и время - работаю

// Создайте страницу conditions.php перенесите туда код по if-else.
// На index.php выведете ссылку на conditions.php































// закрывающий php тег
?>