<?php

$sql = "SELECT id, tea_kind FROM kinds_of_teas";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo"Tea kind: ". $row["tea_kind"] . "<br>";
}
$conn->close();
?>