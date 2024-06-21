<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // データベースに接続
    $db = new PDO('mysql:host=localhost;dbname=test', 'root', '');

    // ユーザー情報をデータベースに保存
    $stmt = $db->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$username, $email, $password]);

    // 保存が完了したら、完了画面にリダイレクト
    header('Location: complete.php');
    exit;
}
?>

<form method="POST">
    ユーザー名: <input type="text" name="username"><br>
    Email: <input type="email" name="email"><br>
    パスワード: <input type="password" name="password" minlength="4" maxlength="4"><br>
    <input type="submit" value="登録">
</form>
