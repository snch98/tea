<?php
$title = "Registration Page";
$hasForm = true;
$isLogin = true;
include("php/includes/header.php");
require_once "php/DbConnect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "INSERT INTO users (username, `password`, email) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $password, $email);

    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $email = trim($_POST["email"]);

    $password = password_hash($password, PASSWORD_DEFAULT);

    if ($stmt->execute()) {
        header("Location:http://localhost/tea/signin.php");
        // exit;
    } else {
        echo "Error: " . $stmt->error;
    }
}

?>

<main class="form-wrapper">
    <?php
    createRegistrationForm();
    ?>
</main>

<?php include("php/includes/footer.php") ?>