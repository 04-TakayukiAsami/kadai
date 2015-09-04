<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">


<title></title>
</head>
<body>

<div class="top">
</div>

<div class="inner">
<div class="forms">
<form action="get_confirm.php" method="get">
<dl>
    <dt>▽名前:</dt>
    <dd><input type="text" name="name" /></dd>
	<dt>▽年齢:</dt>
	<dd><input type="text" name="age" /></dd>
	<dt>▽E-mail:</dt>
	<dd><input type="text" name="mail" /></dd>
	<dt>▽性別</dt>
	<dd>
        <input name="gender" id="man" type="radio" value="男性" checked="checked"/>
        <label for="man">男性</label>
        <input name="gender" id="woman" type="radio" value="女性" />
        <label for="woman">女性</label>
    </dd>
    <dt>▽趣味</dt>
    <dd>
    <input type="checkbox" name="hobby[]" value="スポーツ" id="sport" checked="checked">
　   <label for="sport">スポーツ</label>
    <input type="checkbox" name="hobby[]" value="食べあるき" id="食べあるき" >
　   <label for="eat">食べあるき</label>
    <input type="checkbox" name="hobby[]" value="音楽鑑賞" id="music">
　    <label for="music">音楽鑑賞</label>
	</dd>
		<label for="free">▽自由欄</label>
	<textarea name="comment" cols="50" rows="5" id="free">ご自由にお気持ちをお書き下さい</textarea>

	<br>
 
	<input type="submit"  name="submit"  value="送信" id="btn"/>
</dl>
</form>
    </div>
    </div>

</body>
</html>