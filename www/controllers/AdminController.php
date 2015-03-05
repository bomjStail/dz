<?php

require_once __DIR__ . '/../autoload.php';

class AdminController
{
public function actionAdd()
{
        $article = new NewsModel();
        if (!empty($_POST['title']))
        {
            $article->title = $_POST['title'];
        }

        if (!empty($_POST['text'])) {
            $article->text = $_POST['text'];
        }

        if (isset($article->text) && isset($article->title))
        {
            $article->insert();
        }

    }
}




