<?php
    $connection = mysqli_connect('localhost', 'root', '', 'questions');
    $connection->set_charset("utf8mb4");

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
            <h1 class="gradient-text">Programowanie</h1>
            <h1 style="font-size: 32px; color: var(--h1-color);">Kategorie</h1>
        </div>
        <div class="questions-categories-div">
            <form action="questions-number-pick.php" method="post">
                <input type="hidden" name="categoryName" value="Programowanie">
                <button class="category-button hoverable" name="pickedCategory" value="Python">
                    <h3>Python</h3>
                    <?php
                        $sql = "SELECT count(*) as ilosc_pytan FROM programming_python;";
                        $result = mysqli_query($connection, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo "<p>Baza pytań: " . $row["ilosc_pytan"] . "</p>";
                    ?>
                </button>
                <button class="category-button hoverable" name="pickedCategory" value="C++">
                    <h3>C++</h3>
                    <?php
                        $sql = "SELECT count(*) as ilosc_pytan FROM programming_cpp;";
                        $result = mysqli_query($connection, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo "<p>Baza pytań: " . $row["ilosc_pytan"] . "</p>";
                    ?>
                </button>
                <button class="category-button hoverable" name="pickedCategory" value="JavaScript">
                    <h3>JavaScript</h3>
                    <?php
                        $sql = "SELECT count(*) as ilosc_pytan FROM programming_javascript;";
                        $result = mysqli_query($connection, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo "<p>Baza pytań: " . $row["ilosc_pytan"] . "</p>";
                    ?>
                </button>
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

<?php
    mysqli_close($connection);
?>