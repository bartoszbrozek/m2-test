<?php

namespace EpicModule\SendBass\Controller\Page;

use \Magento\Framework;

class View extends Framework\App\Action\Action
{
    protected $resultJSONFactory;

    public function __construct(
        Framework\App\Action\Context $context,
        Framework\Controller\Result\JsonFactory $resultJSONFactory
    ) {
        $this->resultJSONFactory = $resultJSONFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->resultJSONFactory->create();
        $data = ['msg' => 'Send EPIC bass'];

        return $result->setData($data);
    }
}
