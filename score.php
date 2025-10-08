<?php
    $polaczenie = mysqli_connect('localhost', 'root', '', 'questions');
    $polaczenie->set_charset("utf8mb4");
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
        <?php
            if (!empty($_POST['answer'])){
            
            $chosenone = $_POST['chosen'];
            $score = 0;
            $total = 0;
            $zapytanie = ('select * from math_trigonometry');
            $wynik = mysqli_query($polaczenie, $zapytanie);
            $radio_named = 0;
            for ($i=0; $i < $chosenone; $i++){
                $row = mysqli_fetch_assoc($wynik);
                $selectedValue = $_POST['answer'][$radio_named];
                $correctValue = $row['answer_correct'];

                if ($selectedValue === $correctValue){
                    $score++;
                }
                $radio_named++;
                $total++;
            }
            echo round((($score / $total) * 100), 2)."%";
        }
        ?>
</body>
</html>
<?php 
    mysqli_close($polaczenie);
?>