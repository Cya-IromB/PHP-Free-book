<link rel="stylesheet" href="style.css">
<?php
error_reporting(E_ALL); //E_STRICTレベル以外のエラーを報告
ini_set('display_errors','On'); //エラー表示させるかどうか

//isset関数とis_uploaded_file関数の順序を入れ替えるとエラーが出る。判定式は確定した時点で処理をやめるっぽい。

/*
1.ファイル変数があるか判定
2.アップロードされたか判定
ok↓
3.ファイル移動
4.パーミッション設定
5.成功の通知と場所移動した画像表示
ng↓
3.アップロードされていない



*/
if(isset($_FILES['upfile']['tmp_name']) && is_uploaded_file($_FILES['upfile']['tmp_name'])){
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
