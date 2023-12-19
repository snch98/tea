<?php
$title = "Delete Account?";
$isUser = true;
include("php/includes/header.php");

if (!checkLogin()) {
    header("Location: signin.php");
    exit;
}

?>
<main>
    <div class="deletion-form">
        <div class="delete-confirmation">
            <h1>Are you sure you want to delete your account?</h1>
            <h2>This action cannot be undone</h2>
            <h3>When you click the following link, your account will be deleted forever</h3>
            <h4>Please, ensure that you know what you are doing</h4>
            <h5>If you are not sure, <a href="index.php" class="secondary-link">click this to return to home page</a>
            </h5>
        </div>

        <div>
            <a href="" id="main-link">Click here to delete your account.</a>
        </div>
    </div>

</main>

<?php
include("php/includes/footer.php");
?>