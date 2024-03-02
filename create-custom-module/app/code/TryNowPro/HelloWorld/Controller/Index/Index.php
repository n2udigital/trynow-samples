<?php
namespace TryNowPro\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Framework\App\Action\Action
{

    /**
     * @var PageFactory
     */
	protected $_pageFactory;

    /**
     * Constructor
     *
     * @param Context $context
     * @param PageFactory $pageFactory
     */
	public function __construct(
		Context $context,
		PageFactory $pageFactory
	){
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

    /**
     * Hello World view action
     */
	public function execute()
	{
		return $this->_pageFactory->create();
	}
}
