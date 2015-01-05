<?php

/*
 * Syntax: Controller_[name] | name == [name].php
 */

class Controller_HelloWorld extends \Fuel\Core\Controller
{
    public function action_index() {
        echo 'Hello World';
    }
    public function action_hello() {
        echo 'Hello World';
    }
    public function action_view() {
        $data = array(
            'title' => 'FuelPHP Training',
            'header' => 'Header',
            'content' => 'Content',
            'footer' => 'Footer',
        );
        $view = new View('layout', $data);
        return $view;
    }
    public function action_other_view() {
        $view = View::forge('layout');
        $view->title = 'FuelPHP Training';
        $view->header = 'Header';
        $view->content = 'Content';
        $view->set('footer', View::forge('footer'));
        return $view;
    }
    
    public function action_finish_view() {
        $data['posts'] = Model\Post::other_get_posts();
        
        $view = View::forge('index');
        $view->title = 'FuelPHP Training';
        $view->header = View::forge('header');
        $view->content = View::forge('content', $data);
        $view->set('footer', View::forge('footer'));
        
        return $view;
    }
    
    public function action_orm_view() {
        $data['posts'] = \Model\OrmPost::find('all');// == SELECT * FROM post
        
        $view = View::forge('index');
        $view->title = 'FuelPHP Training';
        $view->header = View::forge('header');
        $view->content = View::forge('content', $data);
        $view->set('footer', View::forge('footer'));
        
        return $view;
    }
}

