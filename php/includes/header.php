<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sofiia Chekmenova">
    <meta name="creationDate" content="28.09.2023">
    <meta name="pageExpieryDate" content="01.01.2025">
    <title>
        <?php echo $title ?>
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/card-components.css">
    <?php if (isset($hasForm) && $hasForm)
        echo "<link rel='stylesheet' href='css/feedback-form.css'>"; ?>
    <?php if (isset($isLogin) && $isLogin)
        echo "<link rel='stylesheet' href='css/login-form.css'>"; ?>
    <?php if (isset($isMain) && $isMain)
        echo "<script src='script/slider.js' async></script>"; ?>
</head>

<body>
    <?php
    include("php/DbConnect.php");
    require("php/functions/FetchFunctions.php");
    require("php/functions/LoginFunctions.php");
    ?>
    <header>
        <h1>My Name Is Sofiia And This Is My Webpage About Tea</h1>
        <div class="header-link-group">
            <div>
                <a class="main-link" href="index.php">Home Page</a>
                <a class="main-link" href="blackTea.php" target="_blank">Black Tea</a>
                <a class="main-link" href="greenTea.php" target="_blank">Green Tea</a>
                <a class="main-link" href="exoticTea.php" target="_blank">Exotic Tea</a>
            </div>

            <?php
            if (checkLogin()) {
                echo "<a class='main-link login-btn' href='signout.php'>Sign Out</a>";
            } else {
                echo "<a class='main-link login-btn' href='signin.php'>Sign In</a>";
            }
            ?>
        </div>
    </header>