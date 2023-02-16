<?php
namespace Udigital\CustomModule\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\ResultFactory;

class View extends Action
{
	public function execute()
	{
		$jsonResult = $this->resultFactory->create(ResultFactory::TYPE_JSON);
		$jsonResult->setData([
			'message' => 'My First Page'
		]);

		return $jsonResult;
	}
}