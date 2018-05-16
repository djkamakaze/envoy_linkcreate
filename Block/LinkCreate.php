<?php
namespace Envoy\LinkCreate\Block;
 
class LinkCreate extends \Magento\Framework\View\Element\Template
{
    public function getLinkCreate()
    {
    	$prodId = $this->getRequest()->getParam('id');
		// echo $prodId;
		return $prodId;
        // return 'Create a Linkdfhdfhdfgh';
    }
}