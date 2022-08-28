<?php 

class Post {
    
    public $title;

    public $published;

    public function __construct($title, $published) {
        $this->title = $title;
        $this->published = $published;
    }
}

$posts = [
    new Post('My clock is wrong', true),
    new Post('I really like soup', false),
    new Post('PHP is not too bad', true),
    new Post('):', false),
];

// $unpublishedPosts = array_filter($posts, function ($post) {
//     return ! $post->published;
// });

// $publishedPosts = array_filter($posts, function ($post) {
//     return $post->published;
// });

$changed = array_map(function($post) {
    $post->published = true;
    return $post;
}, $posts);

$titles = array_column($posts, 'title');

var_dump($titles);