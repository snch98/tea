<?php
$title = "Login Page";
$hasForm = true;
$isLogin = true;
include("php/includes/header.php");

session_start();

if (checkLogin()) {
    header("Location: http://localhost/tea/index.php");
    exit;
}

require_once "php/DbConnect.php";
$username = $password = "";
$usernameError = $passwordError = $loginError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    if (empty(trim($username))) {
        $usernameError = "Please enter username";
    }

    $password = $_POST["password"];
    if (empty(trim($password))) {
        $passwordError = "Please enter password";
    }

    if (empty($usenameError) && empty($passwordError)) {
        $sql = "SELECT user_id, username, password, email FROM users WHERE username = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            $stmt->bind_result($id, $username, $hashedPassword, $email);

            if ($stmt->fetch()) {
                if (password_verify($password, $hashedPassword)) {
                    session_start();
                    setcookie("user", $id . $username, time() + 60 * 60, "/");

                    $_SESSION["user_id"] = $id;
                    $_SESSION["isLoggedIn"] = true;
                    $_SESSION["username"] = $username;
                    $_SESSION["email"] = $email;

                    header("Location: http://localhost/tea/index.php");
                } else {
                    $loginError = "Invalid username or password";
                }
            }
        } else {
            $loginError = "Something went wrong";
        }

        $stmt->close();
    }
}
?>

<main class="form-wrapper">
    <form id="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <div>
            <label for="username">Username</label>

            <input type="text" name="username" class="<?php echo !empty($usernameError) ? 'invalid-field' : '' ?>"
                value="<?php echo $username ?>">
            <?php echo !empty($usernameError) ?
                "<span class='validation-error'>$usernameError</span>" :
                "" ?>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" class="<?php echo !empty($passwordError) ? 'invalid-field' : '' ?>"
                value="<?php echo $password ?>">
            <?php echo !empty($passwordError) ?
                "<span class='validation-error'>$passwordError</span>" :
                "" ?>
        </div>

        <?php echo !empty($loginError) ?
            "<span class='validation-error'>$loginError</span>" :
            "" ?>

        <div class="control-buttons login">
            <button type="submit">Sign In</button>
        </div>

        <a class="login-link" href="register.php">Don"t have an account?</a>
    </form>
</main>

<?php include("php/includes/footer.php") ?>