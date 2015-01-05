<?php
class Model 
{
    public static function get_post() {
        $link = mysql_connect('localhost', 'root', '');
        mysql_select_db('test', $link);

        $result = mysql_query('SELECT id, content FROM posts', $link);
        $r = array();

        while ($row = mysql_fetch_assoc($result)) {
            $r[] = $row;
        }
        mysql_close($link);
        
        return $r;
    }
}