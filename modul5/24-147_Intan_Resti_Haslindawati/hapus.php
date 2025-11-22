<?php
include 'db.php';
$id = intval($_GET['id'] ?? 0);
if ($id > 0) {
    // gunakan prepared statement
    $stmt = $conn->prepare("DELETE FROM supplier WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}
header("Location: index.php");
exit;
?>