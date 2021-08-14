<?php

use App\Post\Domain\Post;
use App\Comment\Domain\Comment;


require __DIR__ . '/vendor/autoload.php';

$post = new Post();
$comment = new Comment();

$comment->setComment('Hello world 🌎! PHP 🐘');

$post->addComment($comment);
$comments = $post->getComments();
foreach ($comments as $item) 
{
    echo "<pre>";
    echo "{$item->getComment()}";
}
