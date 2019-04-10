<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>メールフォーム</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>
    <form action="mail_send.php" method="post">
      <input type="text" name="username">
      <input type="text" name="subject">
      <input type="text" name="userAddress">
      <textarea name="comment" cols="30" rows="10"></textarea>
      <input type="submit" value="メールを送る！">
    </form>
  </body>
</html>
