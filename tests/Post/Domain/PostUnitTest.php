<?php

use PHPUnit\Framework\TestCase;
use App\Post\Domain\Post;
use App\Comment\Domain\Comment;
use App\Author\Domain\Author;
use App\Post\Domain\Category;

class PostUnitTest extends TestCase
{
    public function test_should_add_comment_to_post()
    {
        $post = new Post();
        $comment = new Comment();
        $author = new Author("Pedro");
        $category = new Category();
        $category->addName("Software Development");
        $comment->setComment("Lorem Ipsum");

        $post->addComment($comment);
        $post->addAuthor($author);
        $post->addCategory($category);

        $this->assertEquals(1, $post->countComments());
        $this->assertInstanceOf(Comment::class, $post->getComments()[0]);
        $this->assertInstanceOf(Author::class, $post->getAuthor());
        $this->assertInstanceOf(Category::class, $post->getCategory());
        $this->assertEquals("Lorem Ipsum", $post->getComments()[0]->getComment());
        $this->assertEquals("Pedro", $post->getAuthor()->getName());
        $this->assertEquals("Software Development", $post->getCategory()->getName());
    }
}
