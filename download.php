<?php

// 現在実行されているスクリプトの絶対パス
$file = $_SERVER["SCRIPT_FILENAME"];

if ( $_SERVER['REQUEST_METHOD'] == "POST" ) {

  if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit();
  }

}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <title>PHP でファイルを強制ダウンロード</title>
    
<script>

</script>


</head>

<body>
    <h3 class="alert alert-primary">
        <a href=".">PHP でファイルを強制ダウンロード</a>
    </h3>
    <div id="content"
        class="m-4">
        <form action=""
            method="POST">
            <div>
                <input
                    type="submit"
                    name="send"
                    value="この PHP をダウンロード">
            </div>

        </form>

    </div>
</body>
</html>
