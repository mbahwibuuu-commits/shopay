<?php
require 'config.php';
$username = trim($_POST['username'] ?? '');
$message  = trim($_POST['message'] ?? '');
if ($username && $message) {
  $stmt = $pdo->prepare("INSERT INTO messages(username,message,created_at) VALUES(?,?,NOW())");
  $stmt->execute([$username, $message]);
}
