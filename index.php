<?php
echo "Задача 2:". PHP_EOL;
echo "Текущий файл: " . basename(__FILE__) . PHP_EOL;
echo "Текущая строка: " . __LINE__ . PHP_EOL;

$heredoc = <<<EOT
Lorem ipsum dolor sit amet consectetur adipisicing elit.
Nesciunt aspernatur esse optio quod eveniet eos impedit corporis voluptatem qui amet architecto illum,
dolorem quis dolores harum, recusandae, modi error pariatur!
EOT;
echo 'Переменная heredoc: ' . $heredoc . PHP_EOL;

$a='Рыба';
$b='человек';

echo 'Вывод информации переменными: ' . $a . ' рыбою сыта, а ' . $b .  ' человеком'. PHP_EOL;





echo PHP_EOL . "Задача 3:". PHP_EOL;

// $variable = 3.14;
// $variable = 3;
// $variable = 'one';
// $variable = true;
// $variable = null;
$variable = [];

if (is_bool($variable)) {
    $type = 'bool';
} elseif (is_float($variable)) {
    $type = 'float';
} elseif (is_int($variable)) {
    $type = 'int';
} elseif (is_string($variable)) {
    $type = 'string';
} elseif (is_null($variable)) {
    $type = 'null';
} else  {
    $type = 'other';
}

echo "type is $type" . PHP_EOL;

 

switch (true) {
    case is_bool($variable):
        $type = 'bool';
        break;
    case is_float($variable):
        $type = 'float';
        break;
    case is_int($variable):
        $type = 'int';
        break;
    case is_string($variable):
        $type = 'string';
        break;
    case is_null($variable):
        $type = 'null';
        break;
    default:
        $type = 'other';
        break;
}

echo "type is $type" . PHP_EOL;



?>