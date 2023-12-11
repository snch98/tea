<?php
$title = "Login Page";
$hasForm = true;
$isLogin = true;
include("php/includes/header.php");
require("php/functions/LoginFunctions.php");
?>

<main class="form-wrapper">
<?php 
createRegistrationForm();
?>
</main>

<?php include("php/includes/footer.php") ?>