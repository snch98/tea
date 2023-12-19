<?php 
require("php/functions/LoginFunctions.php");
require_once "php/DbConnect.php";

if (!checkLogin()) {
    header("Location: signin.php");
    exit;
}

session_start();
$userId = $_SESSION["user_id"];
$sql = "DELETE FROM users WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);

if ($stmt->execute()) {
    $_SESSION = array();
    session_destroy();
    header("Location: http://localhost/tea/signin.php");
} else {
    echo "Something went wrong";
}
exit;
?>