<?php

//Задание1
$name = Dmitry;
$age = 29;
echo "Меня зовут $name <br>";
echo "Мне $age лет <br> ";
//конец задания.


//задание2
$stor_a =5; //задаем размер стороны треугольника
$coren3 = sqrt(3); //находим корень из 3
$buffer = 0;// дополнительная переменная для вычислений верхней части формулы.
$stor_a = pow ($stor_a, 2); //возводим сторону в квадрат
$buffer = $stor_a*$coren3;//вычисляем верхнюю часть формулы
$plosh = $buffer/4; //Создаем переменную для вывода результата и вычисляем S
echo "<br>";
echo "S = $plosh";

?>
