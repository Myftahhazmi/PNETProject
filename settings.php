
<?php
//  Check Login user
session_start();
if(!isset($session ["username"])) {
    header("Location:index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/16d06ec41e.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="mainpage-container">
        <div class="top-bar">
                <a href="main-page.php" class="back-arrow">
                    <i class="fa-solid fa-angle-left angleLeft"></i>
                </a>
                <div class="main-page-title">P-NET MOBILE</div>
                <div class="main-page-info"></div>
        </div>

        <div class="main-container">
            <div class="settings-box">
                <button class="noti-button" id = "stormButton">
                    Thunderstorm Alert
                    <i class="fa-solid fa-bell bell" id = "stormIcon"></i>
                </button>
                <button class="noti-button" id = "rainButton">
                    Continuous Rain Alert
                    <i class="fa-solid fa-bell bell" id = "rainIcon"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="flood-icon">
        <script src="js/floodbtn.js"></script>
    </div>
</body>
</html>