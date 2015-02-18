<?php

function get_news(){
    $fp = fopen('comments.txt','a');
    fwrite($fp, $_POST['content']. "<br/>");
    fclose($fp);
}

?>