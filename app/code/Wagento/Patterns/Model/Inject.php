<?php
namespace Wagento\Patterns\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Reports\Block\Adminhtml\Sales\SalesFactory;

class Inject extends AbstractModel
{
    /** @var Sales */
    protected $_sales;
    protected $_context;

    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        SalesFactory $sales,
        array $data = []
    ){
        $this->_sales = $sales;
        $this->_context = $context;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    private function useSales($param0, $param1 = 1){
        $result = $param1;
        return $this->sales->create();
    }
}
