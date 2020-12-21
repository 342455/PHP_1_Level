<?php

// Задание 1.
//Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
//если $a и $b положительные, вывести что они положительные;
//если $а и $b отрицательные, вывести что они отрицательные оба;
//если $а и $b разных знаков, вывести что они разных знаков;
//Ноль можно считать положительным числом.

$a = rand(-5, 5);
$b = rand(-5, 5);

//1 вариант

if ($a >= 0 & $b >= 0) {
    echo "Обе переменные положительные<br>";
    echo "Переменная a = $a, а переменная b = $b<br>";
} else if ($a < 0 & $b < 0) {
    echo "Обе переменные отрицательные<br>";
    echo "Переменная a = $a, а переменная b = $b<br>";
} else if ($a < 0 & $b >= 0 || $a >= 0 & $b < 0) {
    echo "Переменные имеют разные знаки<br>";
    echo "Переменная a = $a, а переменная b = $b<br>";
}

//2 вариант - выглядит плохо, но хочу понять правильно ли я понял switch
//switch ($a, $b) {
//    case $a >= 0, $b >= 0:
//    echo "Обе переменные положительные";
//    break;
//    case $a < 0, $b < 0:
//    echo "Обе переменные отрицательные";
//    break;
//    case $a < 0, $b >= 0 || $a >= 0, $b < 0:
//    echo "Переменные имеют разные знаки";
//    break;
//}
echo "<br>";
echo "--------------------<br>";

//Задание 2.
//Присвоить переменной $c значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15. При желании сделайте это задание через рекурсию вторым вариантом.

//1 вариант - не понял как можно сократить с помощью switch, в рекурсии приятнее выглядит

$c = rand(0, 15);

switch ($c) {
    case 1:
        echo $c++;
        echo "<br>";
    case 2:
        echo $c++;
        echo "<br>";
    case 3:
        echo $c++;
        echo "<br>";
    case 4:
        echo $c++;
        echo "<br>";
    case 5:
        echo $c++;
        echo "<br>";
    case 6:
        echo $c++;
        echo "<br>";
    case 7:
        echo $c++;
        echo "<br>";
    case 8:
        echo $c++;
        echo "<br>";
    case 9:
        echo $c++;
        echo "<br>";
    case 10:
        echo $c++;
        echo "<br>";
    case 11:
        echo $c++;
        echo "<br>";
    case 12:
        echo $c++;
        echo "<br>";
    case 13:
        echo $c++;
        echo "<br>";
    case 14:
        echo $c++;
        echo "<br>";
    case 15:
        echo $c;
        echo "<br>";
        break;
}

echo "<br>";
echo "-----------------<br>";

//2 вариант - вроде разобрался с кодом, но если у Вам будет возможность пошагово ещё раз показать логику этого кода, то буду очень признателен.

function foo($n)
{
    echo $n++;
    echo "<br>";
    if ($n <= 15 & $n >= 0) foo($n);
}

foo(rand(0, 15));

echo "<br>";
echo "-----------------<br>";


//Задания 3.
//Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return. В делении проверьте деление на 0 и верните текст ошибки.

$e = rand(-5, 5);
$f = rand(-5, 5);

function amount($e, $f)
{
    return $e + $f;
}

;
function subtraction($e, $f)
{
    return $e - $f;
}

;
function multiplication($e, $f)
{
    return $e * $f;
}

;
function division($e, $f)
{
    if ($f == 0) {
        echo "ERROR. Попытка деления на 0.";
    } else {
        return $e / $f;
    }
}

;

echo "E = $e, F = $f <br>";

echo amount($e, $f);
echo "<br>";

echo subtraction($e, $f);
echo "<br>";

echo multiplication($e, $f);
echo "<br>";

echo division($e, $f);
echo "<br>";


echo "<br>";
echo "-----------------<br>";


//Задание 4.
//Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).


function mathOperation($arg1, $arg2, $operation) {
    switch ($subtraction($operation)) {
        case $amount:
            break;
        case $subtraction:
            break;
        case $multiplication:
            break;
        case $division:
            break;
    }
};

echo mathOperation(5, 2, $subtraction);

// Так и не въехал как вызвать уже созданнаую функцию. Новую прописываю, получается, добавляю старую - "тишина". Очень жду Вашу обратную связь на этот "быдлоКод"

echo "<br>";
echo "-----------------<br>";


//Задание 5.
//Собрать страницу с меню и контентом, зарендерить как минимум 2 подшаблона через renderTemplate. ВАЖНОЕ


//ПОКА НЕ РЕШЕНО, ДУМАЮ КАК!


//Задание 6.
//*С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.


function power($val, $pow)
{
    if ($val == 0) {
        return 0;
    } else if ($pow == 0) {
        return 1;
    } else if ($pow < 0) {
        return power(1 / $val, -$pow);
    } else {
        return $val * power($val, $pow - 1);
    }
}

;

echo power(rand(-5, 5), rand(-5, 5));

echo "<br>";
echo "-----------------<br>";

//Задание 7.
//*Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
//22 часа 15 минут
//21 час 43 минуты

function timeM($hour, $min)
{
    if ($hour == 0 || $hour >= 5 & $hour <= 20) {
        $hourW = " часов ";
    } else if ($hour == 1 || $hour == 21) {
        $hourW = " час ";
    } else {
        $hourW = " часа ";
    }
    if ((($min % 10) >= 2) && (($min % 10) <= 4)) {
        $minW = " минуты.";
    } else if (($min % 10) === 1) {
        $minW = " минута.";
    } else {
        $minW = " минут.";
    }

    echo $hour . $hourW . $min . $minW;
}

;

timeM(12, 22);
echo "<br>";
timeM(2, 10);
echo "<br>";
timeM(21, 21);


//
