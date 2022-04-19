<?php

namespace dsalgado\ProductComments\Model\ResourceModel\ProductComments;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            \dsalgado\ProductComments\Model\ProductComments::class,
            \dsalgado\ProductComments\Model\ResourceModel\ProductComments::class
        );
    }
}
