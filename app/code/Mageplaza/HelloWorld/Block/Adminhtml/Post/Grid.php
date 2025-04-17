<?php
namespace Mageplaza\HelloWorld\Block\Adminhtml\Post;

use Magento\Backend\Block\Widget\Grid\Extended;
use Magento\Backend\Block\Template\Context; 
use Magento\Backend\Helper\Data;
use Magento\Framework\Registry;
use Magento\Backend\Model\Session;
use Mageplaza\HelloWorld\Model\PostFactory;

class Grid extends Extended
{
    protected $_postFactory;

    public function __construct(
        Context $context,
        Data $backendHelper,
        PostFactory $postFactory,
        Registry $registry,
        Session $backendSession,
        array $data = []
    ) {
        $this->_postFactory = $postFactory;
        parent::__construct($context, $backendHelper, $data);
    }
 
     /**
      * Prepare collection for grid
      *
      * @return \Magento\Framework\Data\Collection
      */
     protected function _prepareCollection()
     {
         $collection = $this->_postFactory->create()->getCollection();
         $this->setCollection($collection);
         return parent::_prepareCollection();
     }
 
     /**
      * Prepare columns for grid
      *
      * @return $this
      */
     protected function _prepareColumns()
     {
         $this->addColumn(
             'post_id',
             [
                 'header' => __('Post ID'),
                 'index'  => 'post_id',
                 'type'   => 'number',
             ]
         );
 
         $this->addColumn(
             'title',
             [
                 'header' => __('Title'),
                 'index'  => 'title',
             ]
         );

         $this->addColumn(
            'actions',
            [
                'header'    => __('Actions'),
                'type'      => 'action',
                'getter'    => 'getId',
                'actions'   => [
                    [
                        'caption' => __('Edit'),
                        'url'     => [
                            'base' => '*/*/edit',
                            'params' => ['_current' => true]
                        ],
                        'field'    => 'post_id'
                    ],
                    [
                        'caption' => __('Delete'),
                        'url'     => [
                            'base' => '*/*/delete',
                            'params' => ['_current' => true]
                        ],
                        'field'    => 'post_id'
                    ]
                ],
                'filter'    => false,
                'sortable'  => false,
                'index'     => 'actions',
                'is_system' => true,
            ]
        );
 
         return parent::_prepareColumns();
     }


     /**
      * Get the grid URL for actions
      *
      * @return string
      */
      public function getGridUrl()
      {
          return $this->getUrl('*/*/grid', ['_current' => true]);
      }
 }