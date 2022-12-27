<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Вікторина</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;500&family=Roboto+Mono:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
    </style>
    </head>
    <body>
        <div class="navbar">
            <a href="index.html">Домашня сторінка</a>
            <a href="wishing-generator.html">Генератор побажань</a>
            <!-- <a href="inspiration.php">Дізнатись більше</a> -->
            <a href="quiz.html" style="color:darkslategrey; background-color:white;">Новорічний квіз</a>
        </div>

        <h3 class="res">Ваш результат:</h3>
        <?php
            ini_set('display_errors', 0);
            $a1 = 2;
            $a2 = 5;
            $a3 = [1, 4, 5, 7];
            $a4 = 3;
            $a5 = 1;
            $a6 = 1;
            $a7 = 4;
            $a8 = 3;
            $a9 = 2;
            $a10 = 1;
            $a11 = 1;
            $a12 = "2112";
            $q1 = $_POST['Q1'];
            $q2 = $_POST['Q2'];
            $q3 = $_POST['Q3'];
            $q4 = $_POST['Q4'];
            $q5 = $_POST['Q5'];
            $q6 = $_POST['Q6'];
            $q7 = $_POST['Q7'];
            $q8 = $_POST['Q8'];
            $q9 = $_POST['Q9'];
            $q10 = $_POST['Q10'];
            $q11 = $_POST['Q11'];
            $q12date = $_POST['Q12'];
            $q12arr = explode("-", $q12date);
            $q12 = $q12arr[2].$q12arr[1];
            $sum = 0;
            $max = 12;
            if($a1 == $q1){$sum++;}//q1
            if($a2 == $q2){$sum++;}//q2
            if($a3 == $q3){$sum++;}//q3
            if($a4 == $q4){$sum++;}//q4
            if($a5 == $q5){$sum++;}//q5
            if($a6 == $q6){$sum++;}//q6
            if($a7 == $q7){$sum++;}//q7
            if($a8 == $q8){$sum++;}//q8
            if($a9 == $q9){$sum++;}//q9
            if($a10 == $q10){$sum++;}//q10
            if($a11 == $q11){$sum++;}//q11
            if($a12 == $q12){$sum++;}//q12
            echo "<h1 class='result'>".$sum."/".$max."</h1>";
        ?>
    </body>
</html>