<!DOCTYPE html>
<html>
<head>
    <title>News　詳細一覧</title>
    <meta charset="UTF-8">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>


<body>


<?php include 'header.php'; ?>
   

<article class="news-detail">
<?php
$pdo = new PDO("mysql:host=localhost;dbname=news;charset=utf8", "root", "");
$sql = "SELECT * FROM enq2";
// $sql = "SELECT name FROM enq";
// $sql = "SELECT name, email FROM enq";    
// $sql = "SELECT * FROM enq where id = 1";
// $sql = "SELECT * FROM enq LIMIT 3";
// $sql = "SELECT * FROM enq ORDER BY id DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($results as $row) {
    echo '<dl class="clearfix">';
    echo'<dt class="news-date">'.$row["create_date"].'</dt>';
    echo'<dd class="news-description">'.$row["news_title"].'</dd>';
    echo "</dl>";
}
$pdo = null;
?>
<p class="view-detail text-right"><a href="#">ニュース一覧を見る</a></p>
</article>
</section>


    <!--#information-->
<?php include 'footer.php'; ?>

</body>
</html>