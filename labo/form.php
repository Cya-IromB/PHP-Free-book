<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>forms</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>
    <div id="bg1"></div>
    <form action="form.php" method="post">
      名前: <br>
      <input type="text" name="userName" size="30" value="" placeholder=""><br />
      メールアドレス: <br>
      <input type="text" name="mail" size="30" value="" placeholder=""><br />
      コメントをどうぞ！: <br>
      <textarea name="comment"  cols="30" rows="10"></textarea><br />
      <br />
      <input type="submit" value="押せええええええええええ！！！"  class="linktag">
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

    <div class="photoFrame">
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

    <p>$_POST等は中身を直接買えるのは厳禁で、基本的に参照するだけに留めること。</p>
    <p>また、$_POSTや$_GET等の文字列を表示する場合、悪意あるhtmlやJSを変換する必要がある。</p>
    <ul>
      <li>htmlspecialchars($_POST['xxx']) -> 「<>&"」を変換してくれる。</li>
      <li>htmlspecialchars($_POST['xxx'],ENT_QUOTES) -> 上記に加え「&#39」を変換してくれる。</li>
      <li>nl2br($_POST['comment']) -> 改行文字を&lt;br /&gt;に変えてくれる。</li>
      <li>stripslashes($_POST['xxx']) -> エスケープ文字をすべてカット。</li>
      <li>addslashes($_POST['xxx']) -> ぜんぶエスケープしてくれる。</li>
    </ul>

    <h2>ファイルのアップロード</h2>
    <form action="zikken.php" method="post" enctype="multipart/form-data">
      ここにファイルを上げてね！<br />
      <input type="file"  value="このボタンにファイルを重ねても投稿できます。" name="upfile" size=30  accept="image/*" class="linktag"><br />
      <input type="submit" value="そーめん" class="linktag">
    </form>

    <p>ok?</p>

    <p>-つかったもの-</p>
    <ul>
      <li>isset() -> そもそもこの変数ある？</li>
      <li>is_uploaded_file($_FILES['formタグのname']['tmp_name']) -> アップロードされたファイルはここに入ってる？</li>
      <li>move_uploaded_file($_FILES['formタグのname']['tmp_name'],'移動先のパス') -> ファイルを移動する。成功するとtrueを返す。</li>
      <li>chmod('対象ファイルのあるディレクトリのパス'.$_FILES['formタグのname']['name'],0xxx) -> パーミッション変更</li>
    </ul>

    




  </body>
</html>
