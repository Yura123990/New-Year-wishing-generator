<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Передбачення на 2023 рік</title>
</head>
<body>
    <?php
        $fname = $_GET['fname'];
        $lname = $_GET['lname'];
        // $birthday = $_GET['birthday'];
        // $dob = new DateTime($birthday);
        // $now = new DateTime();
        // $diff = $now->diff($dob);
        // echo "<h2>$diff->y</h2>"
        echo "<h1 class='name-heading'>$fname $lname,</h1>";
        echo "<h3 class='new-year-wishing' id='new-year-wishing-id'>Вітаю з Новим роком! 
        І хочеться всім побажати, щоб в прийдешньому році з нами сталося те саме диво, про яке ми всі так мріємо!!🇺🇦 
        </h3>";

        $wish = array('Новий рік для вас буде найвдалішим і незабутнім. 365 днів феєрверку подій і можливостей. Головне, уважно дивитися по сторонах, щоб не упустити яскравий хвіст удачі!',
                    'Гармонія і щастя чекають вас в наступаючому році! Нарешті настає той період, коли у всіх сферах вашого життя буде стабільний баланс і рівновага. І як результат, ви будете спокійні і щасливі!',
                    'Кілька років мрієте про відпустку - в цьому році мрії збуваються!',
                    'Не вчися на помилках. Вчися на комп’ютері',
                    'Якщо тобі не вдається когось переконати, заплутай його.',
                    '80% проблем вирішуються самі по собі, а 20% не вирішуються зовсім. Так що не метушіться!',
                    'Скільки з’їси цукерок в новорічну ніч, стільки бажань втілиться в реальність.',
                    'Вас чекає безліч цікавих і захоплюючих … побутових справ.',
                    'Ви позбудетеся від поганої звички … і придбаєте дві нових.',
                    'Якщо ви оголосите війну своєму дивану, то ваші мрії знайдуть силу.');
        if(isset($_POST['clickforwish'])){
            $rand = random_int(0, count($wish)-1);
            echo "<h3 class='new-year-wishing'>$wish[$rand]</h3>";
            echo '<style type="text/css">
        #wishbutton {
            display: none;
        }
        #new-year-wishing-id{
            display: none;
        }
        </style>';
        }
    ?>

    <img class='fortune-cookie' src="fortune-cookie.png" width="30%">
    <form method="post" class="fortune">
        <input id="wishbutton" type="submit" value="Побачити своє передбачення" name="clickforwish">
    </form>

    <hr>

    <video width="500" height="420" autoplay muted controls>
        <source src="new-year-pryvitannia.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video> 

    <hr>

    <h1 class="name-heading">Пропоную переглянути декілька цікавих відео про Різдво та Новий рік</h1>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/Px51tUGs5Vw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/-BS28w5Bi7U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/G2UkjKFpsIE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/cIssUjadFL8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</body>
</html>