<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    $numb = 4; //int
    //$numb = 45;
    $number = 10.15; //float
    $bool = false; //boolean
    $str = "Переменная"; //string

    $a = 0.5; //int
    $b = "0.5"; //string

    echo $a + floatval($b); //floatval - функция переводит к типу данных float

    
    echo $str . ': ' . $numb . ',' . $number;
    ?>
</body>
</html>
