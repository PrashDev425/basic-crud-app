<?php
require "../../database/connect.php";

if (isset($_GET["id"])) {
    $id = intval($_GET["id"]);
    $deleteQuery = "DELETE FROM students WHERE student_id = $id";
    $result = mysqli_query($conn, $deleteQuery);
    if ($result && mysqli_affected_rows($conn) > 0) {
        header("Location: index.php");
        exit();
    } else {
        echo "Student not found or delete failed.";
    }
} else {
    echo "No ID provided.";
}
?>