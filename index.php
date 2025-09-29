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
    <script src="script.js"></script>
    <div class="viewport">
        <div class="title">
            <a href="home.html">Quizy</a>
        </div>
        <div class="welcome-div">
            <h1>Matematyka</h1>
        </div>
        <div class="questions-number-div">
            <a class="question-number-div" href="page2.php?varname=<?php echo $var_value ?>">
                <h3>
                    <?php
                        $numberOfQuestions = $_POST["wybor"];
                        if($numberOfQuestions == 1){
                            echo "1";
                        } else if($numberOfQuestions == 5){
                            echo "5";
                        } else if($numberOfQuestions == 10){
                            echo "10";
                        }
                    ?>
                </h3>
            </a>
        </div>
    </div>
</body>
</html>