<?php
 declare(strict_types=1);
 namespace Macad\Jumpstart\Model;
 use Macad\Jumpstart\Api\CategoryInterface;

 class Product
 {
    function __construct(
        private CategoryInterface $category,
    ) {}
     function getCategoryName()
     {
         return $this->category->getName();
     }
 }