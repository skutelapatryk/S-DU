<!DOCTYPE html>
<?php
    $categoryName = $_POST["categoryName"];
    $pickedCategory = $_POST["pickedCategory"];

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

    $categoryTableName = $categories[$pickedCategory];

    $currentMode = $_POST["currentMode"] ?? "dark";
?>

<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizy</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="viewport">
        <div class="title">
            <a id="a-home">Quizy</a>
        </div>
        <div class="welcome-div">
            <?php
                echo "<h1  class='gradient-text'>" . $categoryName . "</h1>";
                echo "<h1 style='font-size: 32px; color: var(--h1-color);'>" . $pickedCategory . "</h1>";
            ?>
            <h3>Losuj pytania</h3>
        </div>
        <div class="questions-number-div">
            <form action="quiz.php" method="post" class="questions-number-form">
                <?php
                    echo "<input type='hidden' name='currentMode' value='".$currentMode."'>";
                    echo "<input type='hidden' name='categoryTable'" . " value='" . $categoryTableName . "'>"
                ?>
                <button type="submit" class="question-number-div hoverable" name="wybor" value=1>1 pytanie</button>
                <button type="submit" class="question-number-div hoverable" name="wybor" value=5>5 pytań</button>
                <button type="submit" class="question-number-div hoverable" name="wybor" value=10>10 pytań</button>
            </form>
        </div>
    </div>

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