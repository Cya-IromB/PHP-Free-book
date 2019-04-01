<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>phplabo3</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>
  <h1>その3ッ！！！！！</h1>
  <h2>連想配列</h2>
  <p>jsと同じようなモン。</p>
  <p>$vars = array('キー名' => 値, 'キー名' => 値);</p>
  <p>もういいっしょ。</p>

  <p>いやでも、待て。シングルクォーテーョンでも行けるのか？</p>
  <?php
    $doubleQ = array("aaaa"=>"a4つ","bbbb"=>"b4つ");
    $singleQ = array('きー１'=>'あたい１','きー２'=>'あたい２');

    echo $doubleQ["aaaa"].'<br />'.$doubleQ['bbbb'].'<br />';
    echo $singleQ["きー１"].'<br />'.$singleQ['きー２'].'<br />';
  ?>
  <p>-いけた-</p>

  <?php
    foreach ($doubleQ as $key => $value) {
      echo $key.'->'.$value.'<br>';
    }
  ?>

  <h3></h3>
  </body>
</html>
