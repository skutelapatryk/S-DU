<?php
    $currentMode = $_POST["currentMode"] ?? "dark";

    $categories = array(
        "Arytmetyka" => "math_arithmetic",
        "Płaszczyzna kartezjańska" => "math_cartesian_plane",	
        "Trygonometria" => "math_trigonometry",
        "Flagi" => "geography_flags",
        "Lokalizacja" => "geography_localizations",
        "Stolice" => "geography_capitals",
        "Python" => "programming_python",
        "C++" => "programming_cpp",
        "JavaScript" => "programming_javascript"
    );
    $random_key = array_rand($categories);
    $random_value = $categories[$random_key];
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

            //====================================================================
            if (isset($_POST["categoryTable"]) && !empty($_POST["categoryTable"]) && !isset($_GET['category']) && !isset($_POST['category'])){
                $categoryTable = $_POST["categoryTable"];
                $category = NULL;
            }
            else {
                $categoryTable = $random_value;
                $category = $_GET['category'];
            };

            $zapytanie = "select * from " . $categoryTable;
            $wynik = mysqli_query($polaczenie, $zapytanie);
            //====================================================================

            $radio_name = 0;
            $radio_id = 1;
            $location_number = 1;
            
            //====================================================================
            if (isset($_POST["wybor"]) && !empty($_POST["wybor"])){
                $chosenone = $_POST["wybor"];
            }
            else {
                $chosenone = 1;
            };
            //====================================================================

            echo "<input type='hidden' name='chosen' value='".$chosenone."'>";
            echo "<input type='hidden' name='chosenCategory' value='".$categoryTable."'>";

            //========s
            session_start();
            $_SESSION['wylosowane'] = [];
            //===========

            for ($i=1; $i <= $chosenone; $i++){
                //====================================================================
                $zapytanie = "select count(id) as liczba_pytan from " . $categoryTable;
                $wynik = mysqli_query($polaczenie, $zapytanie);
                $row = mysqli_fetch_assoc($wynik);
                $amount = $row['liczba_pytan'];
                
                if (count($_SESSION['wylosowane']) >= $amount){
                    session_write_close();
                    echo '<section><button type="submit">Wyślij odpowiedzi!</button></section>';
                    echo "<br>";
                    $wylosowane = htmlspecialchars(json_encode($_SESSION['wylosowane']), ENT_QUOTES);
                    echo "<input type='hidden' name='wylosowane' value='". $wylosowane ."'>";
                    exit;
                }

                do {
                    $random_question = mt_rand(1, $amount);
                }

                while (in_array($random_question, $_SESSION['wylosowane']));
                $_SESSION['wylosowane'][] = $random_question;
                session_write_close();

                $zapytanie = "select * from " . $categoryTable . " where id=".$random_question;
                $wynik = mysqli_query($polaczenie, $zapytanie);
                $row = mysqli_fetch_assoc($wynik);
                //====================================================================

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
                        echo '<a href="images/'.$categoryTable.'_'.$random_question.'.png" target="_blank">';
                        echo '<img src="images/'.$categoryTable.'_'.$random_question.'.png" alt="'.$categoryTable.$random_question.'">';
                        echo '</a>';
                    };
                
                echo '<br><br><hr><br><br>';
                $radio_name++;
            };
            $wylosowane = htmlspecialchars(json_encode($_SESSION['wylosowane']), ENT_QUOTES);
            echo "<input type='hidden' name='wylosowane' value='". $wylosowane ."'>";
            echo "<input type='hidden' name='category' value='". $category ."'>";
            echo '<section><button type="submit" class="submitButton">Wyślij odpowiedzi!</button></section>';
            echo "<br>";
            mysqli_close($polaczenie);
        ?>
    </form>

    <button class="mode-switch" id="modeSwitch" onclick="changeIcon();">
        <svg id="modeIcon" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path id="modePath" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 0 1-.5-17.986V3c-.354.966-.5 1.911-.5 3a9 9 0 0 0 9 9c.239 0 .254.018.488 0A9.004 9.004 0 0 1 12 21Z"/>
        </svg>
    </button>
    
    <script src="scriptquiz.js"></script>
    <script src="scriptMode.js"></script>
    <script>
        changeMode(document.getElementsByName("currentMode")[0].value);
    </script>
</body>
</html>