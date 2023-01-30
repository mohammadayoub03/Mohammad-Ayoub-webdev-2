<?php
  require 'connectdb.php';
  $id = $_POST['id'];

  try {
    $stmt = $pdo->prepare("DELETE FROM cart WHERE id = :id");
    $stmt->bindValue(':id', $id);
    $stmt->execute();
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

  header('Location: cart.php');
  exit;
?>
