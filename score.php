<?php
    $polaczenie = mysqli_connect('localhost', 'root', '', 'questions');
    $polaczenie->set_charset("utf8mb4");
    $finalScore = 0;

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
        $finalScore =  round((($score / $total) * 100), 2);
    }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Quizy</title>
</head>
<body>
    <div class="viewport">
        <div class="title">
            <a href="home.html">Quizy</a>
        </div>
        <div class="welcome-div">
            <h1>Koniec</h1>
            <span class="score-span">
            <?php
                echo "<h2 class='score-element'>Twój wynik: " . $finalScore . "%</h2>";
            ?>
            </span>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
<?php 
    mysqli_close($polaczenie);
?>