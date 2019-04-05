<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>forms</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>
    <form action="form.php" method="post">
      名前: <br>
      <input type="text" name="userName" size="30" value="" placeholder=""><br />
      メールアドレス: <br>
      <input type="text" name="mail" size="30" value="" placeholder=""><br />
      コメントをどうぞ！: <br>
      <textarea name="comment"  cols="30" rows="10"></textarea><br />
      <br />
      <input type="submit" value="押せええええええええええ！！！" />
    </form>

    <p>上のフォームは連想配列$_POSTへ格納される。</p>
    <p>上記のケースの場合、連想配列には……</p>

    <pre><code>
    $_POST['userName'] => (名前:で入力した文字列);
    $_POST['mail'] => (メールアドレスで入力した文字列);
    $_POST[comment] => (コメントをどうぞ！ で入力された文字列);

    $_REQUEST['userName'] => (名前:で入力した文字列);
    $_REQUEST['mail'] => (メールアドレスで入力した文字列);
    $_REQUEST[comment] => (コメントをどうぞ！ で入力された文字列);
    </code></pre>

    <br>

    <div class="phpOutput">
    <?php
    if(!empty($_POST)){
      echo '<p>POST======================================</p>';
      foreach ($_POST as $key => $value) {
        echo "${key} -> ".htmlspecialchars($value).'<br />';
      }
    }

    if(!empty($_REQUEST)){
      echo '<p>REQUEST===================================</p>';
      foreach ($_REQUEST as $key => $value) {
        echo "${key} -> ".htmlspecialchars($value).'<br />';
      }
    }

    if($_GET){
      echo '<p>GET=======================================</p>';
      foreach ($_GET as $key => $value) {
        echo "${key} -> ".htmlspecialchars($value).'<br />';
      }
    }
     ?>
     </div>



  </body>
</html>
