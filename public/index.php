<?php

$query = rtrim($_SERVER['QUERY_STRING'],'/');

require '../vendor/core/Router.php';
require '../vendor/libs/functions.php';

Router::add('posts/profile',['controller'=>'Posts', 'action'=>'opener']);
Router::add('posts/add',['controller'=>'Posts', 'action'=>'add']);
Router::add('posts',['controller'=>'Posts', 'action'=>'index']);
Router::add('',['controller'=>'Main', 'action'=>'index']);

debug(Router::getRoutes());

if (!Router::matchRoute($query)) {
    echo '404';
}