<?php 

//1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:

$a = rand(-5, 5);
$b = rand(-7, 10);

echo "Ex.1. Num1 = $a, num2 = $b, result: ";

if($a >=0 && $b >= 0) {
    echo $a - $b;
} elseif ($a <= 0 && $b <= 0) {
    echo $a * $b;
} else {
    echo $a + $b;
}

//2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.

$c = rand(1, 15);

switch($c) {
    case 1:
        echo  "<br> Ex.2. Result: ";
        for ($c=1; $c<=15; $c++) {
            echo "$c, ";
        }
        break;
        case 2:
            echo  "<br> Ex.2. Result: ";
            for ($c=2; $c<=15; $c++) {
                echo "$c, ";
            }
            break;
        case 3:
            echo  "<br> Ex.2. Result: ";
            for ($c=3; $c<=15; $c++) {
                 echo "$c, ";
            }
            break;
        case 4:
            echo  "<br> Ex.2. Result: ";
            for ($c=4; $c<=15; $c++) {
                echo "$c, ";
            }
            break;
        case 5:
            echo  "<br> Ex.2. Result: ";
            for ($c=5; $c<=15; $c++) {
                echo "$c, ";
            }
            break;
        case 6:
            echo  "<br> Ex.2. Result: ";
            for ($c=6; $c<=15; $c++) {
                echo "$c, ";
            }
            break;
        case 7:
            echo  "<br> Ex.2. Result: ";
            for ($c=7; $c<=15; $c++) {
                echo "$c, ";
            }
            break;
        case 8:
            echo  "<br> Ex.2. Result: ";
            for ($c=8; $c<=15; $c++) {
                echo "$c, ";
            }
            break;
        case 9:
            echo  "<br> Ex.2. Result: ";
            for ($c=9; $c<=15; $c++) {
                echo "$c, ";
            }
            break;
        case 10:
            echo  "<br> Ex.2. Result: ";
            for ($c=10; $c<=15; $c++) {
                echo "$c, ";
            }
            break;
        case 11:
            echo  "<br> Ex.2. Result: ";
            for ($c=1; $c<=15; $c++) {
                echo "$c, ";
            }
            break;
        case 12:
            echo  "<br> Ex.2. Result: ";
            for ($c=12; $c<=15; $c++) {
                echo "$c, ";
            }
            break;
        case 13:
             echo  "<br> Ex.2. Result: ";
            for ($c=13; $c<=15; $c++) {
                echo "$c, ";
            }
            break;
        case 14:
            echo  "<br> Ex.2. Result: ";
            for ($c=14; $c<=15; $c++) {
                echo "$c, ";
            }
            break;
        case 15:
            echo  "<br> Ex.2. Result: ";
            for ($c=15; $c<=15; $c++) {
                echo "$c, ";
            }
            break;
        default:
            echo "Uncorrect date";
}

//3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.

    function sum($x, $y) {
        return $x + $y;
    }
    function sub($x, $y) {
        return $x - $y;
    }
    function mult($x, $y) {
        return $x * $y;
    }
    function div($x, $y) {
        return $x / $y;
    }

//4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, 
//$operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) 
//и вернуть полученное значение (использовать switch).

    function mathOperation($arg1, $arg2, $operation) {
        switch($operation) {
            case "+":
                return sum($arg1, $arg2);
                break;
            case "-":
                return sub($arg1, $arg2);
                break;
            case "*":
                return mult($arg1, $arg2);
                break;
            case "/":
                return div($arg1, $arg2);
                break;
            default:
                return "Uncorrect date";
        }
    }
    echo "<br> Ex. 4. Result of numbers 6 and 2: ";
    echo "sum: " . mathOperation(6, 2, "+");
    echo " substraction: " . mathOperation(6, 2, "-");
    echo " multiplication: " . mathOperation(6, 2, "*");
    echo " division: " . mathOperation(6, 2, "/");

//6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

    function power($val, $pow){
        if($val == 1) {
            return $val;
        } else {
            return $val * power($val, $pow - 1);
        }
        
    }
    echo "<br> Ex. 6. Result: " . power(5, 3);

    //тут ругается, но не могу понять почему(Fatal error: Out of memory (allocated 576716800) (tried to allocate 262144 bytes) in C:\OpenServer\domains\geekbrains\php_level1\lesson2\lesson2.php on line 166)

?>