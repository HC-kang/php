<?php

require_once './vendor/autoload.php';

use Eclair\Routing\Route;
use Eclair\Database\Adaptor;
use Eclair\Routing\Middleware;

Adaptor::setup('mysql:dbname=myapp_test', 'root', 'root');

class HelloMiddleware extends Middleware
{
    public static function process()
    {
        return true;
    }
}

Route::add('get', '/', function () {
    echo 'Hello, world';
}, [ HelloMiddleware::class ]);

Route::add('get', '/posts/{id}', function ($id) {
    if ($post = Adaptor::getAll('SELECT * FROM posts WHERE `id` = ?', [ $id ] )) {
        return var_dump($post);
    }
    http_response_code(404);
});

Route::run();



// ---------------------------------------------------
// use Eclair\Http\Request;

// $_SERVER['REQUEST_METHOD'] = 'GET';
// $_SERVER['PATH_INFO'] = '/posts/write';

// var_dump(Request::getMethod());
// var_dump(Request::getPath());


// ---------------------------------------------------
// require_once './src/Database/Adaptor.php';

// use Eclair\Database\Adaptor;

// Adaptor::setup('mysql:dbname=myapp_test', 'root', 'root');

// class Post
// {

// }

// $posts = Adaptor::getAll('SELECT * FROM posts LIMIT 3', [], Post::class);
// var_dump($posts);