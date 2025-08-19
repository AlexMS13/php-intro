<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
echo nl2br("<b>Задача 2</b>". PHP_EOL);
echo nl2br("Текущий файл: " . basename(__FILE__) . PHP_EOL);

echo nl2br("Текущая строка: " . __LINE__ . PHP_EOL);

$heredoc = <<<EOT
Lorem ipsum dolor sit amet consectetur adipisicing elit.
Nesciunt aspernatur esse optio quod eveniet eos impedit corporis voluptatem qui amet architecto illum,
dolorem quis dolores harum, recusandae, modi error pariatur!
EOT;

echo nl2br($heredoc . PHP_EOL);

$a='Рыба';
$b='человек';

echo nl2br($a . ' рыбою сыта, а ' . $b .  ' человеком'. PHP_EOL);





echo nl2br(PHP_EOL . "<b>Задача 3</b>". PHP_EOL);

// $variable = 3.14;
// $variable = 3;
// $variable = 'one';
// $variable = true;
$variable = null;
// $variable = [];

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

echo nl2br("type is $type" . PHP_EOL);

 

switch ($variable) {
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

echo nl2br("type is $type" . PHP_EOL);



?>


</body>
</html>



