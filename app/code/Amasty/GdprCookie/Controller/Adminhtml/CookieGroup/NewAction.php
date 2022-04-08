<?php

namespace Amasty\GdprCookie\Controller\Adminhtml\CookieGroup;

use Amasty\GdprCookie\Controller\Adminhtml\AbstractCookieGroup;

class NewAction extends AbstractCookieGroup
{
    public function execute()
    {
        $this->_forward('edit');
    }
}
