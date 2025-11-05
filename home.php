<?php
    $currentMode = $_POST["currentMode"] ?? "dark";
    $currentMode = $_GET['currentMode'] ?? 'dark';
?>


<!DOCTYPE html>
<html lang="en">
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
        <div class="quizes-div">
            <h1>Kategorie</h1>
            <div class="category-wrapper">
                <div class="quiz-category-div hoverable" id="mathDiv">
                    <h2>Matematyka</h2>
                    <ul class="span-wrapper">
                        <li><span class="category-card-span">Płaszczyzna kartezjańska</span></li>
                        <li><span class="category-card-span">Trygonometria</span></li>
                        <li><span class="category-card-span">Arytmetyka</span></li>
                    </ul>
                </div>
                <div class="quiz-category-div hoverable" id="geographyDiv">
                    <h2>Geografia</h2>
                    <ul class="span-wrapper">
                        <li><span class="category-card-span">Lokalizacja</span></li>
                        <li><span class="category-card-span">Stolice</span></li>
                        <li><span class="category-card-span">Flagi</span></li>
                    </ul>
                </div>
                <div class="quiz-category-div hoverable" id="programmingDiv">
                    <h2>Programowanie</h2>
                    <ul class="span-wrapper">
                        <li><span class="category-card-span">JavaScript</span></li>
                        <li><span class="category-card-span">Python</span></li>
                        <li><span class="category-card-span">C++</span></li>
                    </ul>
                </div>
                <div class="quiz-category-div hoverable" id="randomDiv">
                    <h2>Losowe pytanie</h2>
                    <ul class="span-wrapper">
                        <li><span class="category-card-span">Wszystkie kategorie</span></li>
                    </ul>
                </div>
            </div>
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