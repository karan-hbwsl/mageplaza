<?php
declare(strict_types=1);
namespace Macad\Jumpstart\Controller\Index;
use Magento\Framework\App\Action\HttpGetActionInterface;

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\View\Result\Page;


class Index implements HttpGetActionInterface
{
    protected $pageFactory;
     public function __construct(PageFactory $pageFactory,
     ) {
         $this->pageFactory = $pageFactory;
    }
    public function execute(): Page
    {
        return $this->pageFactory->create();
    }
}