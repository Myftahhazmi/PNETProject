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
                <div class="main-page-title">10m WIND FORECAST CHART AND MSLP</div>
                <div class="main-page-info"></div>
        </div>

        <div class="main-container">
            <div class="over-container">
                <img src="http://weather.vsg-labs.com/petronas_data/weatherchart/latest_SCS_mslp_7.0days_24hourly_chart.gif"alt="" class="fit-image" id="image-api">

            </div>

            <div class="bottom-container">
                <!-- sliding panel wrapper -->
                <div class="navpanel">
                    <div class="sliding-box">
                        <button class="trigger" id="trigger"></button>
                        <div class="bottom-title" id="title-api"> South China Sea Forecast (7 Days)</div>
                        <button class="sliding-btn" id="SECS">South China Sea</button>
                        <button class="sliding-btn" id="PM">Peninsular Malaysia</button>
                        <button class="sliding-btn" id="SS">Sabah and Sarawak</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<div>
    <!-- Slider -->
    <script src="js/Wind_Button.js"></script>

    <!-- Button -->
    <script src="js/Silder_Trigger.js"></script>
</div>
</html>