<?php

namespace Amasty\GdprCookie\Controller\Adminhtml;

use Magento\Backend\App\Action;

abstract class AbstractCookieGroup extends Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Amasty_GdprCookie::cookie_group';
}
