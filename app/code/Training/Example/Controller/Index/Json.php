<?php

declare(strict_types=1);

namespace Training\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\ResultInterface;

class Json implements ActionInterface
{
    private JsonFactory $jsonFactory;

    public function __construct(JsonFactory $jsonFactory)
    {
        $this->jsonFactory = $jsonFactory;
    }

    public function execute(): ResultInterface
    {
        $result = $this->jsonFactory->create();
        $data = [
            'success' => true,
            'message' => 'JSON response working!',
            'data' => [
                'example_key' => 'example_value'
            ]
        ];
        return $result->setData($data);
    }
}
