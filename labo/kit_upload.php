<link rel="stylesheet" href="style.css">
<?php
error_reporting(E_ALL); //E_STRICTレベル以外のエラーを報告
ini_set('display_errors','On'); //エラー表示させるかどうか


if(is_uploaded_file($_FILES['upfile']['tmp_name'])){
  if(move_uploaded_file($_FILES['upfile']['tmp_name'],'img_labo/'.$_FILES['upfile']['name'])){
    //パーミッション設定
    chmod('img_labo/'.$_FILES['upfile']['name'],0644);
    echo $_FILES['upfile']['name'].'をアップロードしたぞッ！！<br />';
    echo '<img src='.'"img_labo/'.$_FILES['upfile']['name'].'" class="imgs">';
  }else{
    echo 'アップロードできない…';
  }
}else{
  echo 'ファイルが選択されていないッ！！';
}
?>
