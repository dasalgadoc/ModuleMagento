<?php

namespace Amasty\GdprCookie\Model\ResourceModel\CookieConsent;

use Amasty\GdprCookie\Model\CookieConsent;
use Amasty\GdprCookie\Model\ResourceModel\CookieConsent as CookieConsentResource;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * @method CookieConsent[] getItems()
 */
class Collection extends AbstractCollection
{
    /**
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function _construct()
    {
        $this->_init(CookieConsent::class, CookieConsentResource::class);
        $this->_setIdFieldName($this->getResource()->getIdFieldName());
    }

    public function joinCustomerData()
    {
        $guest = $this->getConnection()->quote(__('Guest'));
        $guestEmail = $this->getConnection()->quote('-');

        $this->getSelect()->joinLeft(
            ['customer' => $this->getTable('customer_entity')],
            'customer.entity_id = main_table.customer_id',
            [
                'email' => new \Zend_Db_Expr("IF(main_table.customer_id != 0, email, $guestEmail)"),
                'name' => new \Zend_Db_Expr(
                    "IF(main_table.customer_id != 0, CONCAT_WS(' ', prefix, "
                    . "firstname, middlename, lastname, suffix), $guest)"
                )
            ]
        );

        return $this;
    }
}
