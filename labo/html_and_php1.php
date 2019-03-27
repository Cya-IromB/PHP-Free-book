<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>ぺーはーぺー</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>
  <p>※読み込む際、F5ではなくctrl + F5でキャッシュもクリアしてください。</p>

  <h1>まずは基礎！！！</h1>
  <h2>PHPとHTMLを組み合わせて書く場合のファイル</h2>

  <p><?php echo 'まぁこの辺わかりきってますよね。'; ?></p>

  <h3>Date関数</h3>
  <p>Dateは日付と時間を取得できる。引数はYmd(日付)とHis(時間)。<br>
  山田ヒスと覚えるとよい。</p>

  <p>date("Y年m月d日"); date("H時i分s秒");</p>
  <p><?php echo date("Y年m月d日").' '.date("H時i分s秒"); ?></p>
  <p>挙動としては、引数として受け取ったYmdHisをそれぞれ変換するだけっぽい。<br>文字列として返されているのだろうか。</p>

  <h3>html上での改行</h3>
  <p>\nで"phpによって出力されたHTMLのソースそのもの"に改行を入れられる。そんだけ！</p>
  <p>エスケープシーケンス、基本的には\n、\t、\\だけ覚えときゃ困らなそう。<br>
    ちなみにシングルクォーテーションの場合はエスケープシーケンスすら効かないらしい。</p>

  <h2>変数と演算の項</h2>
  <p>いやまぁ分かるけど見落とし無いか探すだけ</p>

  <?php
    $str = 'string';
    $str2 = 'れんけつー';
    $var = 24;

    echo "<p>ダブルクォート。\$strの中身は{$str}です。\$varの中身は{$var}だ。<\p>";
    echo '<p>シングルクォート。\$strの中身は{$str}です。\$varの中身は{$var}だ。<\p>';
  ?>

  <p>ある程度やったけど、文字列はドット「.」で区切る。独自表記やめろクソがッ！！</p>

  <?php
  echo $str.$str2;
  ?>

  <p>インクリメントとデクリメントはまぁ、はい。</p>

  <?php
  $var++;
  echo $var;
  ?>

  <h2>定数</h2>
  <p>phpの定数ってdefine(定数名,中身)を使うんだけど、よく考えたらこの記法、関数だわ。</p>

  <?php
  define('CONST_VAR',$var);
  echo 'CONSTVAR = '.CONST_VAR;
  ?>

  <p>定義済み変数というものがある</p>
  <ul>
    <li>__FILE__ → 実行中のPHPファイル名</li>
    <li>__LINE__ → 実行中の行数</li>
    <li>TRUE</li>
    <li>FALSE</li>
    <li>NULL</li>
  </ul>

  <?php
  echo __FILE__.'<br>';
  echo __LINE__.'<br>';
  ?>

  <h3>ヒアドキュメント</h3>
  <p>変数にやたら長い文字列を表示したり、格納したりする場合に使う機能。</p>

  <?php
  /*
  $longlongString = <<< EOT
  <p>ちゃんと文字入ってる？ ろんぐろんぐすとりんぐってる？<br>
  いやまぁちゃんと入っていて貰わないと困るんだよね。</p>
  EOT;

  echo $longlongString;
  */
  ?>

  <p>…なんだけど、VSCodeの調子がおかしくなるから今はパスしとく。</p>
  <p>まぁ無暗にヒアドキュメントを使うより、必要な箇所だけをphpで変えるようにするのが基本になると思います。</p>

  <h2>条件分岐</h2>
  <p>ifについては割愛。end-ifだけやる。</p>
  <?php $bool = FALSE ?>

  <?php if($bool):?>
  <p>trueならこの文章が見える</p>

  <?php else: ?>
  <p>falseならこの文章が見える</p>

  <?php endif; ?>

  <h3>三項演算子</h3>
  <?php $ifvar = $bool ? 'とるー':'ふぁるせ'; ?>
  <?php echo '<p>'.$ifvar.'</p>'; ?>

  <p>察しろ。</p>

  <h2>いったん終了！！</h2>

  </body>
</html>
