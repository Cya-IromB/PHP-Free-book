<?php
  error_reporting(E_ALL); //E_STRICTレベル以外のエラーを報告
  ini_set('display_errors','On'); //エラー表示させるかどうか

  mb_language("Japanese");
  mb_internal_encoding("UTF-8");

  //mb_send_mail(宛先,件名,内容,'From:'+送信元) -> 送信成功でtrueを返す
  if (mb_send_mail("example@example.com", "TEST MAIL", "This is a test message.", "From: from@example.com")) {
    echo "メールが送信されました。";
  } else {
    echo "メールの送信に失敗しました。";
  }



?>
