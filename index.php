<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="login-box">
            <div class="login">
                <div class="logo"></div>
                <form method="POST" action="pnetlogin.php">
                <!-- name determine the auth -->
                <input type="password" id="password" name="password" class="input-field" placeholder="Password text..." style="text-align: center; font-size: 20px;">
                <input type="submit" value="LOGIN" class="login-btn">
            </form>
            </div>
        </div>
    </div>

</body>
</html>