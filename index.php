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
    <form action="index.php" method="post">
        <?php 
            $polaczenie = mysqli_connect('localhost', 'root', '', 'questions');
            $polaczenie->set_charset("utf8mb4");
            $zapytanie = ('select * from math_trigonometry');
            $wynik = mysqli_query($polaczenie, $zapytanie);

            $radio_name = 0;
            $radio_id = 1;
            if(isset($_POST["wybor"])){
                    $chosenone = $_POST["wybor"];
                };
            for ($i=1; $i <= $chosenone; $i++){
                    $row = mysqli_fetch_assoc($wynik);

                    echo '<p class="lgbttext2">'.$row['trigonometry'].'</p><br><br>';

                    $answers = ['A', 'B', 'C', 'D'];
                    foreach ($answers as $ans) {
                        $radio_option = 'opcja'.$radio_id;
                        echo '<label><div>';
                        echo '<input type="radio" id="'.$radio_option.'" name="answer['.$radio_name.']" value="'.$ans.'">';
                        echo $ans.'. '.htmlspecialchars($row['answer_'.$ans]);
                        echo '</div></label><br>';
                        $radio_id++;
                    }
                    
                    echo '<br><br><hr><br><br>';
                    $radio_name++;
                };
        ?>
        <button type="submit">Wyślij odpowiedzi!</button>;
    </form>
    <?php 
        if (!empty($_POST['answer'])){
            $score = 0;
            $total = 0;
            $zapytanie = ('select * from math_trigonometry');
            $wynik = mysqli_query($polaczenie, $zapytanie);
            $radio_name = 0;
            for ($i=0; $i <= $chosenone; $i++){
                $row = mysqli_fetch_assoc($wynik);
                $selectedValue = $_POST['answer'][$radio_name];
                $correctValue = $row['answer_correct'];

                if ($selectedValue === $correctValue){
                    $score++;
                }
                $radio_name++;
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