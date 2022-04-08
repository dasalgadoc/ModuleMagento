<?php

namespace Amasty\GdprCookie\Controller\Adminhtml\Cookie;

use Amasty\GdprCookie\Controller\Adminhtml\AbstractCookie;

class NewAction extends AbstractCookie
{
    public function execute()
    {
        $this->_forward('edit');
    }
}
