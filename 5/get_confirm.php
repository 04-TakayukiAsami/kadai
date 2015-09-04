<?php
echo $_GET["name"];
echo $_GET["age"];
echo $_GET["mail"];
echo $_GET["gender"];
foreach($_GET['hobby'] as $i) {
        echo $i;
echo $_GET["comment"];

    //出力ファイル名の作成
    $csv_file = "csv_". date ( "Ymd" ) .'.csv';
 
    //文字化けを防ぐ
    $csv_data = mb_convert_encoding ( $csv_data , "sjis-win" , 'utf-8' );
     
    //MIMEタイプの設定
    header("Content-Type: application/octet-stream");
    //名前を付けて保存のダイアログボックスのファイル名の初期値
    header("Content-Disposition: attachment; filename={$csv_file}");
 
    // データの出力
    echo($csv_data);
    exit();

    
    
    
    }

?>

</body>
</html>