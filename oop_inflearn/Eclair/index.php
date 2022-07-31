<?php

require_once './vendor/autoload.php';
// require_once './src/Database/Adaptor.php';

// use Eclair\Database\Adaptor;

// Adaptor::setup('mysql:dbname=myapp_test', 'root', 'root');

// class Post
// {

// }

// $posts = Adaptor::getAll('SELECT * FROM posts LIMIT 3', [], Post::class);
// var_dump($posts);

use Eclair\Http\Request;

// $_SERVER['REQUEST_METHOD'] = 'GET';
// $_SERVER['PATH_INFO'] = '/posts/write';

// var_dump(Request::getMethod());
var_dump(Request::getPath());