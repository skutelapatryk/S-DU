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
            <h3>Losuj pytania</h3>
        </div>
        <div class="questions-number-div">
            <form action="index.php" method="post" class="questions-number-form">
                <button type="submit" class="question-number-div" name="wybor" value=1>1 pytanie</button>
                <button type="submit" class="question-number-div" name="wybor" value=5>5 pytań</button>
                <button type="submit" class="question-number-div" name="wybor" value=10>10 pytań</button>
            </form>
        </div>
    </div>
</body>
</html>