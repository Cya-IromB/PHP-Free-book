<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>php2</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>
  <h1>PHP第二部だよッ！！！！！</h1>
  <h2>正規表現</h2>
  <p>preg_match("/含まれている文字列/",　比較したい文字列)</p>

  <h3>特殊記号</h3>
  <ul>
    <li>^xxx.. -> ○○で始まる文字である場合</li>
    <li>..xxx$ -> ○○で終わる文字である場合</li>
    <li>[abc] -> abcは含まれるか</li>
    <li>[a-z] -> a-zまでの文字は含まれるか</li>
  </ul>

  <h2>繰り返し</h2>
  <p>※ぶっちゃけやらなくてよさそう</p>
  <p>でもend-forとend-whileはPHP固有だよね。</p>

  <h2>配列</h2>
  <p>構文</p>
  <pre><code>
  $item[] = "やくそう";
  $item[] = "つるぎ";
  $item[] = "ガキ";

  echo $item[0];
  </code></pre>

  </figure>
  <p>↓</p>
  <?php
  $item[] = "やくそう";
  $item[] = "つるぎ";
  $item[] = "ガキ";

  echo $item[2];
  ?>

  <p>(関係ないけどhtmlに&lt;pre&gt;っていう便利なタグがあるのね…)</p>

  <h3>array()関数</h3>
  <pre><code>
    $変数名 = array(1,2,3,4,5);
    echo $変数名;
  </code></pre>
  <p>↓</p>
  <?php
    $変数名 = array(55,12,33,44,45);
    echo $変数名[2];
  ?>

  <h3>count()で要素数を取得できる</h3>
  <pre><code>
  for($i = 0; $i <= count($変数名); $i++){
    echo $変数名[$i];
  }
  </code></pre>
  <p>↓</p>
  <?php
    for($i = 0; $i < count($変数名); $i++){
      echo '<p>'.$変数名[$i].'</p>';
    }
  ?>

  <p>まぁいわゆるlength的な。</p>

  <p>mb_strlen()test</p>
  <?php
    $str = "あいうえお";
    echo mb_strlen($str);
  ?>

  <h3>foreach</h3>
  <p>asを使う</p>
  <pre><code>
  foreach($変数名 as $val){
    echo $val;
  }
  </code></pre>

  <?php
    foreach($変数名 as $val){
      echo $val.'<br />';
    }
  ?>

  <p>end-foreachもあるけど割愛</p>
  </body>
</html>
