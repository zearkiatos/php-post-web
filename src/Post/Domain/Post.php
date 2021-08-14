<?php

namespace App\Post\Domain;

use App\Comment\Domain\Comment;

class Post
{
    protected $comments = [];
    public function addComment(Comment $comment)
    {
        $this->comments[] = $comment;
    }

    public function countComments()
    {
        return count($this->comments);
    }

    public function getComments()
    {
        return $this->comments;
    }
}
