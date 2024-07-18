<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];


include 'connect.php';

    // Prepare and execute the delete query
    $sql = "DELETE FROM webtable WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        echo '';
    } else {
        echo ' ' . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
