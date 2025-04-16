<?php
declare(strict_types=1);
use Macad\Jumpstart\Api\CategoryInterface;

class Category implements CategoryInterface
 {
     protected $name;
     public function getName()
    {
        return $this->category->getName();
    }
}