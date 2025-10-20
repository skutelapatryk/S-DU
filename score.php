<?php
    $polaczenie = mysqli_connect('localhost', 'root', '', 'questions');
    $polaczenie->set_charset("utf8mb4");
    $categoryTable = $_POST["chosenCategory"];
    $finalScore = 0;

    // if (!empty($_POST['answer'])){
    //     $chosenone = $_POST['chosen'];
    //     $score = 0;
    //     $total = 0;
    //     $zapytanie = 'select * from ' . $categoryTable . ";";
    //     $wynik = mysqli_query($polaczenie, $zapytanie);
    //     $radio_named = 0;
    //     for ($i=0; $i < $chosenone; $i++){
    //         $row = mysqli_fetch_assoc($wynik);
    //         $selectedValue = $_POST['answer'][$radio_named];
    //         $correctValue = $row['answer_correct'];

    //         if ($selectedValue === $correctValue){
    //             $score++;
    //         }
    //         $radio_named++;
    //         $total++;
    //     }
    //     $finalScore =  round((($score / $total) * 100), 2);
    // }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesscore.css">
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
        <h1 class="lgbttext">Koniec!</h1>
    </header>
    <main>
        <?php
            echo "<h2 class='score-element'>Twój wynik: " . $finalScore . "%</h2>";
        ?>
    </main>

    <script src="script.js"></script>
        <?php 
            $polaczenie = mysqli_connect('localhost', 'root', '', 'questions');
            $polaczenie->set_charset("utf8mb4");
            $zapytanie = "select * from " . $categoryTable;
            $wynik = mysqli_query($polaczenie, $zapytanie);
            $radio_name = 0;
            $radio_id = 1;
            $location_number = 1;

            $chosenone = $_POST['chosen'];
            $radio_named = 0;

            for ($i=1; $i <= $chosenone; $i++){
                $row = mysqli_fetch_assoc($wynik);
                $selectedValue = $_POST['answer'][$radio_named];
                $correctValue = $row['answer_correct'];
                echo '<p class="lgbttext2">'.$row['question'].'</p><br><br>';
                
                $answers = ['A', 'B', 'C', 'D'];
                foreach ($answers as $ans) {
                    $radio_option = 'opcja'.$radio_id;
                    echo '<label><div>';

                    if ($correctValue === $ans){
                        echo '<input type="radio" class="correct" id="'.$radio_option.'" name="answer['.$radio_name.']" value="'.$ans.'" checked disabled>';
                        echo $ans.'. '.htmlspecialchars($row['answer_'.$ans]);
                    }
                    elseif ($selectedValue === $ans and $selectedValue != $correctValue){
                        echo '<input type="radio" class="chosen" id="'.$radio_option.'" name="answer['.$radio_name.']" value="'.$ans.'" disabled>';
                        echo $ans.'. '.htmlspecialchars($row['answer_'.$ans]);
                    }
                    else {
                        echo '<input type="radio" id="'.$radio_option.'" name="answer['.$radio_name.']" value="'.$ans.'" disabled>';
                        echo $ans.'. '.htmlspecialchars($row['answer_'.$ans]);
                    };

                    

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
            echo $selectedValue." SelectedValue<br>";
            echo $correctValue." Correct Value";
        ?>
        <button><a href="home.html">Wróć do menu!</a></button>
</body>
</html>
<?php 
    mysqli_close($polaczenie);
?>