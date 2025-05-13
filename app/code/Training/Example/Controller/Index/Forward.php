<?php

declare(strict_types=1);

namespace Training\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Controller\Result\ForwardFactory;

class Forward implements ActionInterface
{
    private ForwardFactory $forwardFactory;

    public function __construct(ForwardFactory $forwardFactory)
    {
        $this->forwardFactory = $forwardFactory;
    }

    public function execute(): ResultInterface
    {
        $forward = $this->forwardFactory->create();
        return $forward->forward('page');
    }
}
