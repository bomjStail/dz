<?php

require __DIR__ . '/../classes/DB.php';

function addNews($data)
{
    $db = new DB();
    $sql = "INSERT INTO news ( title, text)
            VALUES (NULL,
             '" . $data['title'] . "',
             '" . $data['text'] . "')";
    $db->sql_exec($sql);
}