<?php
namespace Model;

class Post extends \Model
{
    public static function get_posts() {
        // Use DB Class to query DB
        $query = \Fuel\Core\DB::query("SELECT * FROM Posts");
        $r = $query->as_object()->execute()->as_array();
        return $r;
    }
    
    public static function other_get_posts() {
        $query = \Fuel\Core\DB::select('*')->from('posts');
        $r = $query->as_object()->execute()->as_array();
        return $r;        
    }
}
