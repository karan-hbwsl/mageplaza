<?php

declare(strict_types=1);

namespace Training\LayoutExample\Controller\Layout;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface
{
    private PageFactory $resultFactory;

    public function __construct(PageFactory $resultFactory)
    {
        $this->resultFactory = $resultFactory;
    }

    public function execute(): ResultInterface
    {
        // $result = $this->resultFactory->create();
        // $result->getConfig()->getTitle()->set('Alaa Al-Maliki');
        // $result->getLayout()->getBlock('page.main.title')->setPageTitle("Magento Developer");
        return $this->resultFactory->create();
    }
}
