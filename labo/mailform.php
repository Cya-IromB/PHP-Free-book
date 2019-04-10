<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>メールフォーム</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>
    <form action="mail_send.php" method="post">
      <p>あなたの名前:</p>
      <input type="text" name="username">
      <p>件名:</p>
      <input type="text" name="subject">
      <p>あなたのメールアドレス</p>
      <input type="text" name="userAddress">
      <p>ここに内容を書いてね！</p>
      <textarea name="comment" cols="30" rows="10"></textarea>
      <input type="submit" value="メールを送る！">
    </form>
  </body>
</html>
