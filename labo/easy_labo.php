<?php
$var = '文字列だよ！';

echo '<p>シングルクォートは変数が使えない = $var \n</p>';
echo "<p>ダブルは変数もエスケープも使える = $var \n</p>";

echo '<p>'.date("Y/m/d").' '.date("H/i/s")."</p>\n\n";

//ありがちなコメント機能
/*これも使える*/

//どうやら<!-- -->はコメントにならないらしい。

echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">"

//エスケープシーケンスの\n、ブラウザ上の改行じゃなくてHTMLファイルに変換されるときに改行として解釈されるっぽい。

?>