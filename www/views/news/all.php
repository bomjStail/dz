<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php foreach ($items as $item): ?>
    <a href="http://test/lesson3/index.php?ctrl=News&act=One&id=<?php echo $item->id; ?>"><h1><?php echo $item->title; ?></h1></a>
    
<?php endforeach; ?>
<a href="views/news/news_add.php">Добавить нововсть</a>

</body>
</html>


