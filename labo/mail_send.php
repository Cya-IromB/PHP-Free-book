<?php
  error_reporting(E_ALL); //E_STRICTレベル以外のエラーを報告
  ini_set('display_errors','On'); //エラー表示させるかどうか

  mb_language('Japanese');
  mb_internal_encoding('UTF-8');

  $mail_msg = '名前:'.$_POST['username'].'\n本文:'.$_POST['comment'];

  if(!mb_send_mail('メールアドレス',$_POST['subject'],$mail_msg,'From:'.$_POST['userAddress'])){
    exit('メールの送信に失敗しました！');
  }
  
?>
<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>メール送信</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  <p>メール送信完了！</p>
  </body>
</html>
