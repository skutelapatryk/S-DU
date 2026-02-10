<?php
    $polaczenie = mysqli_connect('localhost', 'root', '', 'questions');
    $polaczenie->set_charset("utf8mb4");

    $currentMode = $_POST["currentMode"] ?? "dark";
    $currentMode = $_GET['currentMode'] ?? $currentMode;

    @$pytanie = $_POST['pytanie'];
    @$odpA = $_POST['odpA'];
    @$odpB = $_POST['odpB'];
    @$odpC = $_POST['odpC'];
    @$odpD = $_POST['odpD'];
    @$ans = $_POST['ans'];
    @$category = $_POST['category'];

    if ($pytanie != ""){
        $order = "INSERT INTO collection (question, answer_A, answer_B, answer_C, answer_D, answer_correct, category) VALUES ('$pytanie','$odpA','$odpB','$odpC','$odpD','$ans','$category')";
        mysqli_query($polaczenie, $order);

        if (!empty($_FILES['obrazek']['tmp_name'])) {

        $zapytanie = "select max(id) as 'id' from collection";
        $wynik = mysqli_query($polaczenie, $zapytanie);
        $row = mysqli_fetch_assoc($wynik);

        $imageData = file_get_contents($_FILES['obrazek']['tmp_name']);
        $imageData = mysqli_real_escape_string($polaczenie, $imageData);

        $imageType = $_FILES['obrazek']['type'];

        $sql = "INSERT INTO images VALUES ('". $row['id']."', '$imageData', '$imageType')";

        mysqli_query($polaczenie, $sql);
        }

        header("Location: ".$_SERVER['PHP_SELF']."?currentMode=".$currentMode);
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding questions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        echo "<input type='hidden' name='currentMode' value='".$currentMode."'>";
    ?>
    
    <div class="viewport">
        <div class="title">
            <a id="a-home">Quizy</a>
        </div>
        <div class="welcome-div">
            <h1 class="gradient-text">Witaj na naszej stronie z quizami!</h1>
        </div>
        <div class="questions-add-div">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="questions-add-wrapper">
                    <div class="question-add-input-div">
                        <h3>Pytanie</h3>
                        <input type="text" name="pytanie">
                    </div>
                    <div class="question-add-input-div">
                        <h3>Odpowiedź A</h3>
                        <input type="text" name="odpA">
                    </div>
                    <div class="question-add-input-div">
                        <h3>Odpowiedź B</h3>
                        <input type="text" name="odpB">
                    </div>
                    <div class="question-add-input-div">
                        <h3>Odpowiedź C</h3>
                        <input type="text" name="odpC">
                    </div>
                    <div class="question-add-input-div">
                        <h3>Odpowiedź D</h3>
                        <input type="text" name="odpD">
                    </div>
                    <div class="question-add-correct-answ-div">
                        <h3>Poprawna odpowiedź</h3>
                        <div class="question-add-correct-answ-wrapper">
                            <div class="question-add-correct-answ-radio-wrapper">
                                <input type="radio" name="ans" id="wyborA" value="A">
                                <label for="">A</label>
                            </div>
                            <div class="question-add-correct-answ-radio-wrapper">
                                <input type="radio" name="ans" id="wyborB" value="B">
                                <label for="">B</label>
                            </div>
                            <div class="question-add-correct-answ-radio-wrapper">
                                <input type="radio" name="ans" id="wyborC" value="C">
                                <label for="">C</label>
                            </div>
                            <div class="question-add-correct-answ-radio-wrapper">
                                <input type="radio" name="ans" id="wyborD" value="D">
                                <label for="">D</label>
                            </div>   
                        </div>
                    </div>
                    <div class="question-add-select-div">
                        <label for="">Kategoria</label>
                        <select name="category" id="category" class="hoverable">
                            <option value="">--wybierz--</option>
                            <option value="math_arithmetic">Arytmetyka</option>
                            <option value="math_trigonometry">Trygonometria</option>
                            <option value="math_cartesian_plane">Płaszczyzna Kartezjańska</option>
                            <option value="geography_capitals">Stolice</option>
                            <option value="geography_localizations">Lokalizacja</option>
                            <option value="geography_flags">Flagi</option>
                            <option value="programming_cpp">C++</option>
                            <option value="programming_javascript">JavaScript</option>
                            <option value="programming_python">Python</option>
                            <option value="diffrent">INNE</option>
                        </select>
                    </div>
                    <div class="question-add-image-div">
                        <input type="file" name="obrazek">
                    </div>
                    
                    <input type="submit" value="Dodaj" class="hoverable" name="addButton">
                </div>
            </form>
        </div>
    </div>

    <button class="mode-switch" id="modeSwitch" onclick="changeIcon();">
        <svg id="modeIcon" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path id="modePath" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 0 1-.5-17.986V3c-.354.966-.5 1.911-.5 3a9 9 0 0 0 9 9c.239 0 .254.018.488 0A9.004 9.004 0 0 1 12 21Z"/>
        </svg>
    </button>

    <script src="script.js"></script>
    <script src="scriptMode.js"></script>
    
    <script>
        changeMode(document.getElementsByName("currentMode")[0].value);
    </script>
</body>
</html>
<?php 
    mysqli_close($polaczenie);
?>