<?php

declare(strict_types=1);

namespace Training\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\RedirectFactory;
use Magento\Framework\Controller\ResultInterface;

class Redirect implements ActionInterface
{
    private RedirectFactory $redirectFactory;

    public function __construct(
        RedirectFactory $redirectFactory
    ) {
        $this->redirectFactory = $redirectFactory;
    }

    public function execute(): ResultInterface
    {
        $redirect = $this->redirectFactory->create();
        $redirect->setPath('example_2/index/index');

        return $redirect;
    }
}
