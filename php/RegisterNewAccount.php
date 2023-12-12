<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "./DbConnect.php";

    $sql = "INSERT INTO users (`username`, `password`, email) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $password, $email);

    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $email = trim($_POST["email"]);

    $password = password_hash($password, PASSWORD_DEFAULT);

    if ($stmt->execute()) {
        header("Location:http://localhost/tea/signin.php", true, 302);
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>