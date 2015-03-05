<?php
require_once __DIR__ . '/../autoload.php';

/**
 * Class NewsModel
 * @property $id;
 * @property $title;
 * @property $text;
 */
class NewsModel
    extends AbstractModel
{
    protected static $table = 'news';

}
