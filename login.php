<?php
    $currentMode = $_POST["currentMode"] ?? "dark";
    $currentMode = $_GET['currentMode'] ?? $currentMode;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
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
            <form method="post">
                <?php
                    echo "<input type='hidden' name='currentMode' value='".$currentMode."'>";
                ?>

                <div class="login-card">
                    <h1 class="gradient-text login-card-title">Logowanie</h1>
                    <div class="input-div username-div">
                        <label for="">Nazwa użytkownika</label>
                        <input type="text" name="login">
                    </div>
                    <div class="input-div password-div">
                        <label for="">Hasło</label>
                        <input type="password" name="password">
                    </div>
                    <button class="login-button" name="loginBtn">Zaloguj</button>
                </div>
            </form>
            <?php
                $polaczenie = mysqli_connect('localhost', 'root', '', 'questions');
                $polaczenie->set_charset("utf8mb4");

                if (isset($_POST["loginBtn"])) {
                    $zapytanie = "select * from users";
                    $wynik = mysqli_query($polaczenie, $zapytanie);
                    $row = mysqli_fetch_assoc($wynik);

                    @$login = $_POST["login"];
                    @$password = $_POST["password"];

                    if ($row["username"] == $login && $row["password"] == $password){
                        echo '<script>
                            window.location.href = "home.php?currentMode=' . $currentMode . '"' .
                        '</script>';
                    }
                    else {
                        echo "Niepoprawny login lub hasło!";
                    }
                }
            ?>
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