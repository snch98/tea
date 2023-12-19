<?php
$title = "User";
$isUser = true;
$hasForm = true;
include("php/includes/header.php");

if (!checkLogin()) {
    header("Location: signin.php");
    exit;
}

$initials = getInitials();
$username = isset($_SESSION["username"]) ? $_SESSION["username"] : "";
$email = isset($_SESSION["email"]) ? $_SESSION["email"] : "";

require_once "php/DbConnect.php";
$oldPassword = $newUsername = $newEmail = $newPassword = "";
$oldPasswordError = $newPasswordError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hashedPassword = $_SESSION["passwordHash"];

    $oldPassword = trim($_POST["old-password"]);
    if (empty($oldPassword)) {
        $oldPasswordError = "Please enter your current password to proceed";
    } else if (!password_verify($oldPassword, $hashedPassword)) {
        $oldPasswordError = "Password doesn't match your current password";
    }


    //echo "U: " . $username . " new U: ". $newUsername . "E: ". $email . "new E: " . $newEmail;


    if (empty($oldPasswordError)) {
        $newUsername = trim($_POST["username"]);
        $newEmail = trim($_POST["email"]);
        $newPassword = !empty(trim($_POST["new-password"])) ? trim($_POST["new-password"]) : $oldPassword;
        $newHashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $userId = $_SESSION["user_id"];

        $sql = "UPDATE users SET 
            username = ?, 
            email = ?,
            password = ?
        WHERE user_id = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $newUsername, $newEmail, $newHashedPassword, $userId);

        if ($stmt->execute()) {
            session_destroy();
            header("Location: http://localhost/tea/signin.php");
            exit;
        } else {
            echo "Something went wrong?";
        }

        $stmt->close();
    }
}
?>

<main>
    <div class="user-edit-content">
        <div>
            <div class='user-profile big'>
                <span>
                    <?php echo $initials ?>
                </span>
            </div>

            <div class="profile-links">
                <a href='signout.php' class="secondary-link">Sign Out</a>
                <a href='deleteConfirmation.php' id="delete-link" title="Don't worry, nothing happens right away">Delete Account</a>
            </div>
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
                    <input type='password' name='old-password'
                        class="<?php echo !empty($oldPasswordError) ? 'invalid-field' : '' ?>">
                    <?php echo !empty($oldPasswordError) ?
                        "<span class='validation-error'>$oldPasswordError</span>" :
                        "" ?>
                </div>

                <div>
                    <label for='new-password'>New password</label>
                    <input type='password' name='new-password'>
                </div>

                <div class='control-buttons user-edit'>
                    <button type='submit'>Save</button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php
include("php/includes/footer.php");
?>