<?php

declare(strict_types=1);

namespace Training\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;

class Index implements ActionInterface 
{
    public function execute() 
    {
        die('Example');
    }
}