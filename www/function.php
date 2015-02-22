<?php
class NewsPaper
{
    public $title;
    public $text;
    public $author;
    public $data;

    function DbConnect()
    {
        $db = mysql_connect("localhost","Admins","12345");
        mysql_select_db("Newsis",$db);

        $result = mysql_query("SELECT * FROM  news",$db);
        $myrows = mysql_fetch_array($result);


        $this->text = $myrows['text'];
        $this->title = $myrows['title'];
        $this->author = $myrows['author'];
    }
}
?>