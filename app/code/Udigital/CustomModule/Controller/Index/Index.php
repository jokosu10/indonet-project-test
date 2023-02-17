<?php
namespace Udigital\CustomModule\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
	// public function execute()
	// {
	// 	$jsonResult = $this->resultFactory->create(ResultFactory::TYPE_JSON);
	// 	$jsonResult->setData([
	// 		'message' => 'My First Page'
	// 	]);

	// 	return $jsonResult;
	// }

	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		return $this->_pageFactory->create();
	}
}