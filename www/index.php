<?php
require('function.php');
if($_POST['content']!=null){
    get_news();
}
?>
<h1>НОВОСНАЯ ЛЕНТА</h1>
<?php
echo nl2br(file_get_contents('comments.txt'));
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>news</title>
</head>
<body>

<h3>Введит новость</h3>
<form action="index.php" method="post">
    <textarea name="content" rows="3" cols="100"></textarea>
    <br/>
    <input type="submit" value="post" />
</form>

</body>
</html>