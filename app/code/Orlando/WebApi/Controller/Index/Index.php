<?php
namespace Orlando\WebApi\Controller\Index;
  
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
 
class Index extends \Magento\Framework\App\Action\Action
{
 
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    )
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
         
    }
    public function execute()
    {
        return $this->resultPageFactory->create(resultPageFactory::TYPE_PAGE);
         
    }
}