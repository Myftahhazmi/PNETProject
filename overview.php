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
            <div class="over-container">
                <img src="http://weather.vsg-labs.com/petronas_data/latest_compilation_charts/latest_wave_compilation_charts.png.gif" alt="" class="fit-image" id="image-api">

            </div>

            <div class="bottom-container">
                <div class="bottom-title" id="title-api"> Hs Forecast (7 Days)</div>

                <div class="btn-row">
                    <button class="info-btn" id="wh">
                        Wave Heights (HS)
                    </button>
                    <button class="info-btn" id="ws50">
                        50m Wind Speed 
                    </button>
                </div>

                <div class="btn-row">
                    <button class="info-btn" id="ws10">
                        10m Wind Speed
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

<div>
    <script src="js/Overview_Switcher.js"></script>
</div>
</html>