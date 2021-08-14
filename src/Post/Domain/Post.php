<?php

namespace App\Post\Domain;

use App\Comment\Domain\Comment;
use App\Author\Domain\Author;

class Post
{
    protected $author;
    protected $category;
    protected $comments = [];
    public function addComment(Comment $comment)
    {
        $this->comments[] = $comment;
    }

    public function addAuthor(Author $author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function addCategory(Category $category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
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
