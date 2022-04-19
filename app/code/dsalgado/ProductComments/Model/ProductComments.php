<?php

namespace dsalgado\ProductComments\Model;

class ProductComments extends \Magento\Frameworl\Model\AbstractModel
{
    protected $_eventPrefix = 'dsalgado_productcomments_productcomments';
    protected $_eventObject = 'productcomments';

    protected function _construct()
    {
        $this->_init(\dsalgado\ProductComments\Model\ResourceModel\ProductComments::class);
    }

}
