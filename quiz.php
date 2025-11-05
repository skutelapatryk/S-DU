<?php
    $currentMode = $_POST["currentMode"] ?? "dark";
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesquiz.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Quizy</title>
</head>
<body>    
    <div class="title">
        <a id="a-home">Quizy</a>
    </div>
    <header>
        <h1 class="lgbttext">Powodzenia!</h1>
    </header>
    <form action="score.php" method="post" id="quizForm" class="quiz-form">
        <?php
            echo "<input type='hidden' name='currentMode' value='".$currentMode."'>";
        ?>
        <?php 
            $polaczenie = mysqli_connect('localhost', 'root', '', 'questions');
            $polaczenie->set_charset("utf8mb4");
            $categoryTable = $_POST["categoryTable"];
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
                    echo '<label><div class="answers-div">';
                    echo '<input type="radio" id="'.$radio_option.'" name="answer['.$radio_name.']" value="'.$ans.'">';
                    echo $ans.'. '.htmlspecialchars($row['answer_'.$ans]);
                    echo '</div></label><br>';
                    $radio_id++;
                }
                    if (!empty($row['image'])){
                        echo '<a href="images/'.$categoryTable.'_'.$location_number.'.png" target="_blank">';
                        echo '<img src="images/'.$categoryTable.'_'.$location_number.'.png" alt="'.$categoryTable.$location_number.'">';
                        echo '</a>';
                        $location_number++;
                    };
                
                echo '<br><br><hr><br><br>';
                $radio_name++;
            };
            echo '<script src="scriptquiz.js">b</script>';
            echo '<button type="submit" class="submitButton">Wyślij odpowiedzi!</button>';
            echo "<br>";
            mysqli_close($polaczenie);
        ?>
    </form>

    <button class="mode-switch" id="modeSwitch" onclick="changeIcon();">
        <svg id="modeIcon" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path id="modePath" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 0 1-.5-17.986V3c-.354.966-.5 1.911-.5 3a9 9 0 0 0 9 9c.239 0 .254.018.488 0A9.004 9.004 0 0 1 12 21Z"/>
        </svg>
    </button>

    <script src="scriptMode.js"></script>
    <script>
        changeMode(document.getElementsByName("currentMode")[0].value);
    </script>
</body>
</html>