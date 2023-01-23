<?php
// Відповіді
$answers = [6, 5, 4, 3, 1, 2];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>З'єднай відповіді</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;500&family=Roboto+Mono:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        label{
            font-size:100%;
            font-family: 'Montserrat', sans-serif;
            color: khaki;
        }
        
        .match,.match-select{
            padding-bottom:30px;
        }

        button{
            font-family: 'Montserrat', sans-serif;
            height:50px;
            border:4px solid khaki;
            background-color:Peru;
            color:white;
            width:10%;
            margin-left: 45%;
            border-radius:10px;
        }

        #retry{
            font-family: 'Montserrat', sans-serif;
            height:50px;
            background-color: #E17C3B;
            color:azure;
            padding-top: 30px;
            text-decoration:none;
        }
    </style>
</head>
<body>
        <div class="navbar">
            <a href="index.html">Домашня сторінка</a>
            <a href="wishing-generator.html">Генератор побажань</a>
            <!-- <a href="inspiration.php">Дізнатись більше</a> -->
            <a href="quiz.html">Новорічний квіз</a>
            <a href="match-answers.php" style="color:darkslategrey; background-color:white;">Миколай навколо світу</a>
        </div>
    
    <?php
    $q = 6;

    if (isset($_POST['sb'])) {
        // echo "Спрацювало";

        for ($i = 0; $i < $q; $i++) {
            $useranswers[$i] = $_POST['sl' . $i + 1];
            // var_dump($useranswers);
        }
        $c = 0;
        $result = 0;
        foreach($answers as $i){
            // echo $useranswers[$c];
            // echo $i;
            if ($useranswers[$c] == $i){
                $result = $result + 1;
            }
            $c++;
        }
        //var_dump($compare);
        
        //echo $result;
    
        echo "<h3 class='res'>Ваш результат: ".$result."/".$q."</h3>";
        echo "<a id='retry' href='match-answers.php'>Спробувати ще раз</a><hr>";
        echo "<footer>
            <h3>Yura Seniura</h3>
            <p class='for-footer'>©2023 New Year wishing generator. All rights reserved.</p>
        </footer>";
        die();
    }
    ?>

    <h1 class="match">З'єднайте факти про Святих Миколаїв у різних країнах з їхніми іменами</h1>

    <form action="#" method="post">
        <!--  -->
        <h3 class="match">Чиє ім'я перекладається як "Тато Різдва"(з італійської)?</h3>
        <select name="sl1" class="match-select">
            <option value="0">--Вибрати--</option>
            <option value="1">Пай Натал</option>
            <option value="2">Санта Клаус</option>
            <option value="3">Пер Ноель</option>
            <option value="4">Святий Миколай</option>
            <option value="5">Йоулупуккі</option>
            <option value="6">Баббо Натале</option>
        </select>
        <!--  -->
        <h3 class="match">Спочатку цей персонаж був "Різдвяним козлом". Хто це?</h3>
        <select name="sl2" class="match-select">
            <option value="0">--Вибрати--</option>
            <option value="1">Пай Натал</option>
            <option value="2">Санта Клаус</option>
            <option value="3">Пер Ноель</option>
            <option value="4">Святий Миколай</option>
            <option value="5">Йоулупуккі</option>
            <option value="6">Баббо Натале</option>
        </select>
        <!--  -->
        <h3 class="match">Його вшановують моряки як свого покровителя</h3>
        <select name="sl3" class="match-select">
            <option value="0">--Вибрати--</option>
            <option value="1">Пай Натал</option>
            <option value="2">Санта Клаус</option>
            <option value="3">Пер Ноель</option>
            <option value="4">Святий Миколай</option>
            <option value="5">Йоулупуккі</option>
            <option value="6">Баббо Натале</option>
        </select>
        <!--  -->
        <h3 class="match">Йому можуть жартома залишити келих вина, та ні в якому разі не молоко</h3>
        <select name="sl4" class="match-select">
            <option value="0">--Вибрати--</option>
            <option value="1">Пай Натал</option>
            <option value="2">Санта Клаус</option>
            <option value="3">Пер Ноель</option>
            <option value="4">Святий Миколай</option>
            <option value="5">Йоулупуккі</option>
            <option value="6">Баббо Натале</option>
        </select>
        <!--  -->
        <h3 class="match">Вважають, що він має працювати "на голодний шлунок"</h3>
        <select name="sl5" class="match-select">
            <option value="0">--Вибрати--</option>
            <option value="1">Пай Натал</option>
            <option value="2">Санта Клаус</option>
            <option value="3">Пер Ноель</option>
            <option value="4">Святий Миколай</option>
            <option value="5">Йоулупуккі</option>
            <option value="6">Баббо Натале</option>
        </select>
        <!--  -->
        <h3 class="match">Його костюм популяризувала кока-кола</h3>
        <select name="sl6" class="match-select">
            <option value="0">--Вибрати--</option>
            <option value="1">Пай Натал</option>
            <option value="2">Санта Клаус</option>
            <option value="3">Пер Ноель</option>
            <option value="4">Святий Миколай</option>
            <option value="5">Йоулупуккі</option>
            <option value="6">Баббо Натале</option>
        </select>
        <!--  -->
        <button type="submit" name="sb">Надіслати</button>
    </form>

    <footer>
            <h3>Yura Seniura</h3>
            <p class="for-footer">©2023 New Year wishing generator. All rights reserved.</p>
    </footer>
</body>
</html>
