<?php

namespace App\Comment\Domain;

class Comment
{
    protected $comment;

    public function getComment()
    {
        return $this->comment;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }
}
