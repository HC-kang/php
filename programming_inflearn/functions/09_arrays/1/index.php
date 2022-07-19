<?php 

$blog = [
    'title' => 'Lorem Ipsum',
    'categories' => [
        'all' => [
            [
                'title' => 'What is Lorem Ipsum?',
                'content' => 'Lorem Ipsum is simply dummy text of the printing and typing',
            ],
            [
                'title' => 'Why do we use it?',
                'content' => 'It is a long established fact that a reader will be distributed',
            ],
            [
                'title' => 'Where does it come from?',
                'content' => 'Contrary to popular belief, Lorem Ipsum is not simply random'
            ]
        ]
    ]
];

// Push a element
array_push($blog['categories']['all'], [
    'title' => 'Adipisicing proident laborum id officia adipisicing esse quis tempor commodo est dolore.',
    'content' => 'Eiusmod commodo mollit eiusmod veniam cupidatat occaecat et proident ad ullamco deserunt. Laboris reprehenderit laborum esse est enim do proident velit. Magna non deserunt commodo occaecat cupidatat sint. Nulla anim est deserunt qui nulla duis do sunt.',
]);
// var_dump($blog);


// Delete a Element
array_pop($blog['categories']['all']);
// var_dump($blog);


// Filtering
array_filter($blog['categories']['all'], function($post) {
    return $post['title'] === 'What is Lorem Ipsum?';
});


// Validate Key
array_key_exists('title', $blog);


// Make an array from another array
(array_map(function ($post) {
    return $post['title'];
}, $blog['categories']['all']));

// var_dump($blog);


// Fine a key
// echo array_search('Lorem Ipsum', $blog);


// Generate Numbers Array
// var_dump(range(1, 5));
$numbers = range(1, 5);

// Folding
// var_dump(array_reduce($numbers, function ($carry, $num) {
//     var_dump($carry, $num);
//     return $carry += $num * 2;
// }));


// Check element in array
// var_dump(in_array(3, $numbers));


// Get array keys
// var_dump(array_keys($numbers));
// var_dump(array_keys($blog));


// Get array values
// var_dump(array_values($numbers));


// Make a array from variabels;
$message = 'Hello, world';
$userCount = 0;
$pi = 3.14;
$is_visited = false;
$temp = null;

var_dump(compact('message', 'userCount', 'pi', 'is_visited', 'temp'));