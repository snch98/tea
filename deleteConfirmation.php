<?php
$title = "Delete Account?";
$isUser = true;
$hasForm = true;
include("php/includes/header.php");

if (!checkLogin()) {
    header("Location: signin.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["confirm"]) && $_POST["confirm"] == "I want to delete my account") {
        header("Location: http://localhost/tea/delete.php");
        exit;
    }
}
?>
<main>
    <div class="deletion-form">
        <div class="delete-confirmation">
            <h1>Are you sure you want to delete your account?</h1>
            <h2>This action cannot be undone</h2>
            <h3>When you click the following link, your account will be deleted forever</h3>
            <h4>Please, ensure that you know what you are doing</h4>
            <h4>If you are not sure, <a href="index.php" class="main-link">click this to return to home page</a>
            </h4>
        </div>

        <div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                <div>
                    <div>
                        <label for="confirm">Enter "I want to delete my account" and click the following link</label>
                        <input type="text" name="confirm">
                    </div>
                    <button id="delete-link" type="submit">Click here to delete your account.</a>
                </div>
            </form>
        </div>
    </div>

</main>

<?php
include("php/includes/footer.php");
?>