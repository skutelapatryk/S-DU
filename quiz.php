<?php
    $lista = array(
        "math_arithmetic" => "arithmetic",
        "math_cartesian_plane" => "cartesian_plane",
        "math_trigonometry" => "trigonometry",
        "geography_flags" => "arithmetic",
        "geography_localizations" => "localizations",
        "geography_capitals" => "capitals",
        "programming_python" => "python",
        "programming_c++" => "c++",
        "programming_javascript" => "javascript",
    );

    $categoryTable = $_POST["categoryTable"];
    $questionNameFromTable = $lista[$categoryTable];
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
    <form action="index.php" method="$_REQUEST">
        <?php 
            $polaczenie = mysqli_connect('localhost', 'root', '', 'questions');
            $polaczenie->set_charset("utf8mb4");
            $zapytanie = "select * from " . $categoryTable;
            $wynik = mysqli_query($polaczenie, $zapytanie);

            $radio_name = 0;
            $radio_id = 1;
            if(isset($_POST["wybor"])){
                $chosenone = $_POST["wybor"];
            };
            for ($i=1; $i <= $chosenone; $i++){
                    $row = mysqli_fetch_assoc($wynik);
                    $radio_number = 0;
                    $radio_option = 'opcja'.$radio_id;
                    echo '<p class="lgbttext2">'.$row[$questionNameFromTable].'</p><br><br>';
                    echo '<label><div><input type="radio" id="'.$radio_option.'" value="'.$radio_number.'" name="'.$radio_name.'"> A. '.$row['answer_A'].'</div></label><br>';
                    $radio_number = $radio_number + 1;
                    $radio_id = $radio_id + 1;
                    $radio_option = 'opcja'.$radio_id;
                    echo '<label><div><input type="radio" id="'.$radio_option.'" value="'.$radio_number.'" name="'.$radio_name.'"> B. '.$row['answer_B'].'</div></label><br>';
                    $radio_number = $radio_number + 1;
                    $radio_id = $radio_id + 1;
                    $radio_option = 'opcja'.$radio_id;
                    echo '<label><div><input type="radio" id="'.$radio_option.'" value="'.$radio_number.'" name="'.$radio_name.'"> C. '.$row['answer_C'].'</div></label><br>';
                    $radio_number = $radio_number + 1;
                    $radio_id = $radio_id + 1;
                    $radio_option = 'opcja'.$radio_id;
                    echo '<label><div><input type="radio" id="'.$radio_option.'" value="'.$radio_number.'" name="'.$radio_name.'"> D. '.$row['answer_D'].'</div></label><br>';
                    echo '<br><br><hr><br><br>';
                    $radio_name = $radio_name + 1;
                    $radio_id = $radio_id + 1;
                };
            echo '<button type="submit">Wyślij odpowiedzi!</button>';
            mysqli_close($polaczenie);
        ?>
    </form>
</body>
</html>