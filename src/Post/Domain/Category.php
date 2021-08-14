<?php

namespace App\Post\Domain;

class Category
{
    protected $name;

    public function getName()
    {
        return $this->name;
    }

    public function addName($name)
    {
        $this->name = $name;
    }
}
