<?php
    $categoryTable = $_POST["categoryTable"];
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesphp.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Quizy</title>
</head>
<body>
    <section class="title">
            <a href="home.html">Quizy</a>
    </section>
    <header>
        <h1 class="lgbttext">Powodzenia!</h1>
    </header>
    <form action="score.php" method="post">
        <?php 
            $polaczenie = mysqli_connect('localhost', 'root', '', 'questions');
            $polaczenie->set_charset("utf8mb4");
            $zapytanie = "select * from " . $categoryTable;
            $wynik = mysqli_query($polaczenie, $zapytanie);

            $radio_name = 0;
            $radio_id = 1;
            $location_number = 1;
            $chosenone = $_POST["wybor"];
            echo "<input type='hidden' name='chosen' value='".$chosenone."'>";
            echo "<input type='hidden' name='chosenCategory' value='".$categoryTable."'>";
            for ($i=1; $i <= $chosenone; $i++){
                $row = mysqli_fetch_assoc($wynik);

                echo '<p class="lgbttext2">'.$row['question'].'</p><br><br>';

                $answers = ['A', 'B', 'C', 'D'];
                foreach ($answers as $ans) {
                    $radio_option = 'opcja'.$radio_id;
                    echo '<label><div>';
                    echo '<input type="radio" id="'.$radio_option.'" name="answer['.$radio_name.']" value="'.$ans.'">';
                    echo $ans.'. '.htmlspecialchars($row['answer_'.$ans]);
                    echo '</div></label><br>';
                    $radio_id++;
                }
                if ($categoryTable == 'geography_localizations'){
                        echo '<img src="location'.$location_number.'.png" alt="lokacja'.$location_number.'">';
                };
                
                echo '<br><br><hr><br><br>';
                $radio_name++;
                $location_number++;
            };
            echo '<button type="submit">Wyślij odpowiedzi!</button>';
            echo "<br>";
            mysqli_close($polaczenie);
        ?>
    </form>
</body>
</html>