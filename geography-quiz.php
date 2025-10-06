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
            <h1>Geografia</h1>
            <h3>Kategorie</h3>
        </div>
        <div class="questions-categories-div">
            <form action="questions-number-pick.php" method="post">
                <input type="hidden" name="categoryName" value="Geografia">
                <button class="category-button hoverable" name="pickedCategory" value="Flagi">
                    <h3>Flagi</h3>
                    <p>30 pytań</p>
                </button>
                <button class="category-button hoverable" name="pickedCategory" value="Lokalizacja">
                    <h3>Lokalizacja</h3>
                    <p>30 pytań</p>
                </button>
                <button class="category-button hoverable" name="pickedCategory" value="Stolice">
                    <h3>Stolice</h3>
                    <p>30 pytań</p>
                </button>
            </form>
        </div>
    </div>
</body>
</html>