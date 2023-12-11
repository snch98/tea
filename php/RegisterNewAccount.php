<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    require_once "./DbConnect.php";

    $sql = "INSERT INTO users (`username`, `password`, email) VALUES (?, ?, ?)";

    echo $sql;
    $stmt = $conn->prepare($sql);
    echo $stmt;
    $stmt->bind_param("sss", $username, $password, $email);

    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $email = trim($_POST["email"]);

    echo $db . "<br>";
    echo $username . " " . $password . " " . $email . "<br>";
    $password = password_hash($password, PASSWORD_DEFAULT);

    echo $password;

    if ($stmt->execute()) {
        echo "New account created!";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>