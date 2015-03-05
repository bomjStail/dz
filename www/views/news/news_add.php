<!doctype html>
<html lang="ru">
<head>
    <title>добавить новость</title>
</head>
<body>

    <h2>Добавление новости</h2>
    <form action="http://test/lesson3/index.php?ctrl=Admin&act=Add" method="post">

            <label for="title">Заголовок</label>
            <input type="text" name="title" id="title"/>

            <label for="text">Описание</label>
            <textarea name="text" id="text" cols="22" rows="10" "></textarea>


        <input type="submit" value="Добавить"/>
    </form>

</body>
</html>