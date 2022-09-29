<?php
$title = filter_input(INPUT_POST, 'title');
$email = filter_input(INPUT_POST, 'email');
$content = filter_input(INPUT_POST, 'content');

if (empty($title) || empty($email) || empty($content)) {
    $message =
        '「タイトル」「Email」「お問い合わせ内容」のどれかが記入されていません！';
    $link = '
        <a href="./index.php">
          <p>送信画面へ</p>
        </a>
      ';
}

if (!empty($title) && !empty($email) && !empty($content)) {
    $dbUserName = 'root';
    $dbPassword = 'password';
    $pdo = new PDO(
        'mysql:dbname=contactform;host=mysql;charset=utf8',
        $dbUserName,
        $dbPassword
    );

    $sql =
        'INSERT INTO `contacts` (`title`, `email`, `content`) VALUES (:title, :email, :content)';
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':title', $title, PDO::PARAM_STR);
    $statement->bindValue(':email', $email, PDO::PARAM_STR);
    $statement->bindValue(':content', $content, PDO::PARAM_STR);
    $statement->execute();

    $message = '送信完了！！！';
    $link = '
      <a href="./index.php">
        <p>送信画面へ</p>
      </a>
      <a href="./history.php">
        <p>送信履歴をみる</p>
      </a>
    ';
}
?>

<body>
  <h2><?php echo $message; ?></h2>
  <p><?php echo $link; ?></p>
</body>