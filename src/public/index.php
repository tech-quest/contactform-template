<body>
  
  <h1>お問い合わせフォーム</h1>
  
  <p>以下のフォームからお問い合わせください。</p>
  
  <form action="./complete.php" method="post">

    <table>
      <tr>
        <td>タイトル（必須）</td>
        <td><input name="title" placeholder="タイトル"></td>
      </tr>

      <tr>
        <td>Email（必須）</td>
        <td><input name="email" placeholder="Emailアドレス"></td>
      </tr>

      <tr>
        <td>お問い合わせ内容（必須）</td>
        <td><textarea name="content" placeholder="お問い合わせ内容（1000文字まで）をお書きください"></textarea></td>
      </tr>

      <tr>
        <td></td>
        <td><button type="submit" name="button">送信</button></td>
      </tr>

    </table>

  </form>

</body>
