<?php 

namespace AHT\SalesAgents\Controller\Adminhtml\Sacommission;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;
    
    const ADMIN_RESOURCE = "AHT_SalesAgents::index";
    
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(__('Report Product Commission'));
        return $resultPage;
    } 

 
}