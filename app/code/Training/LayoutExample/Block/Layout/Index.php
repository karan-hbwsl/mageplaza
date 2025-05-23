<?php

declare(strict_types=1);

namespace Training\LayoutExample\Block\Layout;

use Magento\Framework\View\Element\Template;

class Index extends Template
{
    protected function _prepareLayout() 
    {
        parent::_prepareLayout();

        $pageMainTitle = $this->getLayout()->getBlock('page.main.title');
        if ($pageMainTitle) 
        {
            $pageMainTitle->setPageTitle('Magento Developer');
        }

        return $this;

    }

    public function getSubTitle(): string 
    {
        return 'Learn Magento 2 Development';
    }
}
