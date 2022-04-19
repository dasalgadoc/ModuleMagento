<?php

namespace dsalgado\ProductComments\Model\ResourceModel;

class ProductComments extends \Magento\Framework\Model\ResourceMode\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('dsalgadoc_productcomments_productcomments', 'entity_id');
    }
}
