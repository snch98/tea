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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $password = "";
    $usernameError = $passwordError = $loginError = "";

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

        if ($stmt->execute()) {
            $stmt->store_result();

            if ($stmt->num_rows == 1) {
                $stmt->bind_result($id, $username, $hashedPassword, $email);

                if ($stmt->fetch()) {
                    if (password_verify($password, $hashedPassword)) {
                        session_start();

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
                echo "Something went wrong";
            }

            $stmt->close();
        }
    }
}
?>

<main class="form-wrapper">
    <?php
    createLoginForm();
    ?>
</main>

<?php include("php/includes/footer.php") ?>