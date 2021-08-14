<?php

use PHPUnit\Framework\TestCase;
use App\Post\Domain\Post;
use App\Comment\Domain\Comment;

class PostUnitTest extends TestCase
{
    public function test_should_add_comment_to_post()
    {
        $post = new Post();
        $comment = new Comment();
        $comment->setComment("Lorem Ipsum");

        $post->addComment($comment);

        $this->assertEquals(1, $post->countComments());
        $this->assertInstanceOf(Comment::class, $post->getComments()[0]);
        $this->assertEquals("Lorem Ipsum", $post->getComments()[0]->getComment());
    }
}
