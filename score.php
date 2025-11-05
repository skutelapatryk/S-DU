<?php
    $currentMode = $_POST["currentMode"] ?? "dark";
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
        <a id="a-home">Quizy</a>
    </section>
    <header>
        <h1 class="lgbttext">Koniec!</h1>
    </header>
    <main>
        <?php
            $polaczenie = mysqli_connect('localhost', 'root', '', 'questions');
            $polaczenie->set_charset("utf8mb4");
            $categoryTable = $_POST["chosenCategory"];
            $finalScore = 0;

            if (!empty($_POST['answer'])){
                $wylosowane = json_decode($_POST['wylosowane'], true);

                if (count($wylosowane) < $_POST['chosen']){
                    $chosenone = count($wylosowane);
                }
                else{
                    $chosenone = $_POST['chosen'];
                }

                $score = 0;
                $total = 0;

                for ($i=0; $i < $chosenone; $i++){
                    $zapytanie = 'select * from ' . $categoryTable . " where id=" . $wylosowane[$total];
                    $wynik = mysqli_query($polaczenie, $zapytanie);
                    $row = mysqli_fetch_assoc($wynik);
                    $selectedValue = $_POST['answer'][$total];
                    $correctValue = $row['answer_correct'];

                    if ($selectedValue === $correctValue){
                        $score++;
                    }
                    $total++;
                }
                $finalScore =  round((($score / $total) * 100), 2);
            }

            echo "<h2 class='score-element'>Twój wynik: " . $finalScore . "%</h2>";
        ?>
    </main>
    <script src="scriptquiz.js"></script>
        <?php 
            $polaczenie = mysqli_connect('localhost', 'root', '', 'questions');
            $polaczenie->set_charset("utf8mb4");
            $zapytanie = "select * from " . $categoryTable;
            $radio_name = 0;
            $radio_id = 1;
            $location_number = 1;

            $chosenone = $_POST['chosen'];

            for ($i=1; $i <= $chosenone; $i++){
                $zapytanie = "select * from " . $categoryTable . " where id=" . $wylosowane[$radio_name];
                $wynik = mysqli_query($polaczenie, $zapytanie);

                $row = mysqli_fetch_assoc($wynik);
                $selectedValue = $_POST['answer'][$radio_name];
                $correctValue = $row['answer_correct'];

                echo '<p class="lgbttext2">'.$row['question'].'</p><br><br>';
                
                $answers = ['A', 'B', 'C', 'D'];
                foreach ($answers as $ans) {
                    $radio_option = 'opcja'.$radio_id;
                    echo '<label><div class="answers-div">';

                    if ($correctValue === $ans){
                        echo '<input type="radio" id="'.$radio_option.'" name="answer['.$radio_name.']" value="'.$ans.'" checked disabled>';
                        echo $ans.'. '.htmlspecialchars($row['answer_'.$ans]).'<p class="tick"> ✔ </p>';
                    }
                    elseif ($selectedValue === $ans and $selectedValue != $correctValue){
                        echo '<input type="radio" class="chosen" id="'.$radio_option.'" name="answer['.$radio_name.']" value="'.$ans.'" disabled>';
                        echo $ans.'. '.htmlspecialchars($row['answer_'.$ans]).'<p class="cross"> ✘ </p>';
                    }
                    else {
                        echo '<input type="radio" id="'.$radio_option.'" name="answer['.$radio_name.']" value="'.$ans.'" disabled>';
                        echo $ans.'. '.htmlspecialchars($row['answer_'.$ans]);
                    };
                    echo '</div></label><br>';
                    $radio_id++;
                }

                if (!empty($row['image'])){
                    echo '<img src="images/'.$categoryTable.'_'.$wylosowane[$radio_name].'.png" alt="'.$categoryTable.$wylosowane[$radio_name].'">';
                };
                
                echo '<br><br><hr><br><br>';
                $radio_name++;
            };
        ?>
        <button onclick="redirectToHomePage();" class="back-button">Wróć do menu!</button>
            <?php
                if ($_POST['category'] == "random"){
                    echo '<form action="quiz.php?category=random" method="post">';
                    echo "<input type='hidden' name='currentMode' value='".$currentMode."'>";
                    echo "<button type='submit' id='randomDiv' class='one-more-button'>Jeszcze jedno pytanie!</button>";
                    echo '</form>';
                }
                else {
                    echo '<form action="quiz.php" method="post">';
                    echo "<input type='hidden' name='currentMode' value='".$currentMode."'>";
                    echo "<input type='hidden' name='categoryTable' value='". $categoryTable ."'>";
                    echo "<button type='submit' class='one-more-button'>Jeszcze jedno pytanie!</button>";
                    echo '</form>';
                }
            ?>

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
<?php 
    mysqli_close($polaczenie);
?>