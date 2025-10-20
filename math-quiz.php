<?php
    $connection = mysqli_connect('localhost', 'root', '', 'questions');
    $connection->set_charset("utf8mb4");
?>

<!DOCTYPE html>
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
    <script src="script.js"></script>
    <div class="viewport">
        <div class="title">
            <a href="home.html">Quizy</a>
        </div>
        <div class="welcome-div">
            <h1>Matematyka</h1>
            <h3>Kategorie</h3>
        </div>
        <div class="questions-categories-div">
            <form action="questions-number-pick.php" method="post">
                <input type="hidden" name="categoryName" value="Matematyka">
                <button class="category-button hoverable" name="pickedCategory" value="Arytmetyka">
                    <h3>Arytmetyka</h3>
                    <?php
                        $sql = "SELECT count(*) as ilosc_pytan FROM math_arithmetic;";
                        $result = mysqli_query($connection, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo "<p>Baza pytań: " . $row["ilosc_pytan"] . "</p>";
                    ?>
                </button>
                <button class="category-button hoverable" name="pickedCategory" value="Płaszczyzna kartezjańska">
                    <h3>Płaszczyzna kartezjańska</h3>
                    <?php
                        $sql = "SELECT count(*) as ilosc_pytan FROM math_cartesian_plane;";
                        $result = mysqli_query($connection, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo "<p>Baza pytań: " . $row["ilosc_pytan"] . "</p>";
                    ?>
                </button>
                <button class="category-button hoverable" name="pickedCategory" value="Trygonometria">
                    <h3>Trygonometria</h3>
                    <?php
                        $sql = "SELECT count(*) as ilosc_pytan FROM math_trigonometry;";
                        $result = mysqli_query($connection, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo "<p>Baza pytań: " . $row["ilosc_pytan"] . "</p>";
                    ?>
                </button>
            </form>
        </div>
    </div>
</body>
</html>

<?php
    mysqli_close($connection);
?>