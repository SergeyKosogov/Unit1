<?php
    echo 'Hello WORLD!!!!!!!!!';
    echo PHP_EOL;
?>

<?php    
    $name = 'Sergey';
    echo $name.PHP_EOL;
?>

<!-- Работа с циклом while -->

<?php    
    $a = 4;
    while ($a--) {
        echo 'Hello ';
    }

    echo PHP_EOL;
?>

<!-- Работа с циклом for -->

<?php    
    for ($i = 1; $i < 11; $i++) {
               
        echo $i, ' ';

    }
    echo PHP_EOL;
?>

<!-- Задача на поиск високосного года -->

<?php
    echo 'Високосные годы в 21 веке'.PHP_EOL;

    for ($year = 2001; $year < 2100; $year++) {
        if ($year % 4 == 0) echo $year, ' ';
    }
?>