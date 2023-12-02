
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
            <div class="over-container">
                <img src="http://weather.vsg-labs.com/petronas_data/nowcast/nowcast_animated.gif" alt="" class="fit-image" id="image-api">

            </div>

            <div class="bottom-container">
                <div class="bottom-title" id="title-api"> TOTAL PRECIPITATIONS ACCUMULATION (1 HOUR)</div>

                <div class="btn-row">
                    <button class="info-btn" id="tp24">
                        Total Precipitation (24hrs)
                    </button>
                    <button class="info-btn" id="tp1">
                        Total Precipitation Accumulation (1hr)
                    </button>
                </div>

                
                <div class="btn-row">
                    <button class="info-btn" id="bv115">
                        BV115
                    </button>
                    <button class="info-btn" id="bv116">
                        BV116-117
                    </button>
                </div>

                
                <div class="btn-row">
                    <button class="info-btn" id="lapok">
                        Lapok
                    </button>
                    <button class="info-btn" id="lgbedia">
                        LgBedia
                    </button>
                </div>

                
                <div class="btn-row">
                    <button class="info-btn" id="longadang">
                        LongAdang
                    </button>
                    <button class="info-btn" id="longseridan">
                        LongSeridan
                    </button>
                </div>

                <div class="btn-row">
                    <button class="info-btn" id="meraraps">
                        Merarap
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

<div>
    <script src="js/Perci_Switcher.js"></script>
</div>
</html>