<?php
$title = "User";
$isUser = true;
$hasForm = true;
include("php/includes/header.php");

if(!checkLogin()) {
    header("Location: signin.php");
    exit;
}

$initials = getInitials();
$username = isset($_SESSION["username"]) ? $_SESSION["username"] : "";
$email = isset($_SESSION["email"]) ? $_SESSION["email"] : "";

require_once "php/DbConnect.php";
$newUsername = $newEmail = $newPassword = "";
$new

if ($_SERVER["REQUEST_METHOD"] == "POST") {

}
?>

<main>
    <div class="user-edit-content">
        <div class='user-profile big'>
            <span>
                <?php echo $initials ?>
            </span>
        </div>

        <div class="edit-form-wrapper">
            <h2>Edit profile data</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                <div>
                    <label for='username'>Edit username</label>
                    <input type='text' name='username' value="<?php echo $username ?>">
                </div>

                <div>
                    <label for='email'>Edit Email</label>
                    <input type='email' id='email-field' name='email' value="<?php echo $email ?>">
                </div>

                <div>
                    <label for='old-password'>Old password</label>
                    <input type='password' name='old-password'>
                </div>

                <div>
                    <label for='new-password'>New password</label>
                    <input type='password' name='new-password'>
                </div>

                <div class='control-buttons login'>
                    <button type='reset'>Reset</button>
                    <button type='submit'>Save</button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php
include("php/includes/footer.php");
?>