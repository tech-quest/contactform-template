<?php
$dbUserName = 'root';
$dbPassword = 'password';
$pdo = new PDO(
    'mysql:dbname=tqcontactform;host=mysql;charset=utf8',
    $dbUserName,
    $dbPassword
);
$sql = 'SELECT * FROM contacts';
$stmt = $pdo->query($sql);
$contacts = $stmt->fetchall(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>送信履歴</title>
</head>
  <body>
    <div class="container">
      <h2>送信履歴</h2>
      <?php foreach ($contacts as $contact): ?>
        <h3><?php echo $contact['title']; ?></h3>
        <p><?php echo $contact['content']; ?></p>
        <?php endforeach; ?>
        <a href = "./index.php">戻る</a>
    </div>
  </body>
</html>

