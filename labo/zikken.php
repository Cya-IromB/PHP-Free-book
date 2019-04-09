<!--
  このファイルは3つの状態を持たせたい
  1.ファイルがアップロードされた(正常)
  2.ファイルのアップロードに失敗した(失敗)
  3.ファイルがアップロードされていない状態(アクセスされるのがおかしい状態)
  4.その他(未知のエラーが起きている状態)
-->

<?php
  error_reporting(E_ALL); //E_STRICTレベル以外のエラーを報告
  ini_set('display_errors','On'); //エラー表示させるかどうか

  const UPLOAD_SUCCESS = 'ファイルのアップロードに成功したぞッ！！';
  const UPLOAD_ERROR_VALID = '対応してない拡張子のファイルだ！';
  const UPLOAD_ERROR = 'すまねぇ、アップロードに失敗してしまったッ！！';
  const UPLOAD_NOTHING = 'ファイルがアップロードされてないけれど、ここにアクセスできるのはおかしい。';

  $result_msg = UPLOAD_NOTHING;
  $post_flg = false; //このファイルは登録していいか否か

  //バリデーションチェック
  if(isset($_FILES['upfile']['tmp_name'])){
    //アップロードはされた。
    /*
      switch(拡張子バリデーションチェック){
        case *.xxx:
        case *.xxx:
        case *.xxx:
        msg = ok;
        (実際はこんなに簡単じゃない)

        break;
        default:
        msg = NG;
        break
      }
    */
    $post_flg = true;
  }else{
    $post_flg = false;
    $result_msg = UPLOAD_NOTHING;
  }

  //
  if($post_flg === true){
    if(is_uploaded_file($_FILES['upfile']['tmp_name'])){
      move_uploaded_file($_FILES['upfile']['tmp_name'],'img_labo/'.$_FILES['upfile']['name']);
      chmod('img_labo/'.$_FILES['upfile']['name'], 0644);

      $result_msg = UPLOAD_SUCCESS;
    }else{
      $result_msg = UPLOAD_ERROR;
    }
  }
?>

<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>アクション先</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>

    <p><?php echo $result_msg; ?></p>
    <div class="photoFrame">
      <img src="<?php echo 'img_labo/'.$_FILES['upfile']['name']; ?>" alt="画像表示される領域" title="アップロードされた画像">
    </div>

    <a href="form.php" class='linktag'>フォームページにもどるッ！！！</a>
    

  </body>
</html>
