<?php

function open_db_connection() {
    $link = mysql_connect('localhost', 'root', '');
    mysql_select_db('mfb');
    
    return $link;
}

function close_db_connection($link) {
    mysql_close($link);
}

function get_all_posts() {
    $link = open_db_connection();
    
    $r = mysql_query("SELECT * FROM pages", $link);
    $posts = array();
    while ($row = mysql_fetch_assoc($r)) {
        $posts[] = $row;
    }
    
    close_db_connection($link);
    
    return $posts;
}

function get_post_by_id($id)
{
    $link = open_database_connection();

    $id = intval($id);
    $query = 'SELECT * FROM pages WHERE id = '.$id;
    $result = mysql_query($query);
    $row = mysql_fetch_assoc($result);

    close_database_connection($link);

    return $row;
}


