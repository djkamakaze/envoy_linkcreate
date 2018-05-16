<?php
namespace Envoy\LinkCreate\Block;
class LinkCreate extends \Magento\Framework\View\Element\Template
{	
	protected $_productRepository;
		
	public function __construct(
		\Magento\Backend\Block\Template\Context $context,		
		\Magento\Catalog\Model\ProductRepository $productRepository,
		array $data = []
	)
	{
		$this->_productRepository = $productRepository;
		return parent::__construct($context, $data);
	}
	
	public function getProductById($id)
	{
		return $this->_productRepository->getById($id);
	}
	
	public function getProductBySku($sku)
	{
		return $this->_productRepository->get($sku);
	}
	public function getLinkCreate()
    {
    	$prodId = $this->getRequest()->getParam('id');
    	
		return $prodId;
       
    }
}
?>
