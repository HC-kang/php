<?php 

// String Match (Regex)
// $url = 'http://example.com';
// preg_match('/^(https?\:)\/\/(.*)(\..*)$/', 'http://example.com', $matches);

// var_dump($matches);

// preg_match_all

$html = <<<'HTML'
<section>
    <h1>Lorem Ipsum</h1>
    <article>
        <h2>What is Lorem Ipsum?</h2>
    </article>
</section>
HTML;

// preg_match_all('/<(h[1-6])>(.*)<\/\\1>/', $html, $matches);
// var_dump($matches);

// Replace
// var_dump(preg_replace('/^(.*)@(.*)$/',  'http://$2?user=$1','pronist@naver.com'));
// echo preg_filter('/^(.*)@(.*)$/', 'http://$2?user=$1', 'pronist@naver.com');

echo preg_replace_callback(
    '/^(.*)@(.*)$/', 
    function ($matches) {
    [, $username, $domain] = $matches;
    return 'http://' . $domain . '?user=' . $username;
},
'pronist@naver.com'
);

// Filter
// var_dump(preg_grep('/^(.*)@(.*)$/', [
//     'php://stdout',
//     'pronist@naver.com'
// ]));

// Escape
// echo preg_quote('^().*$?:[]');


// Split
// $keywords = preg_split('/[\s,]+/', 'hypertext language, programming');
// print_r($keywords);