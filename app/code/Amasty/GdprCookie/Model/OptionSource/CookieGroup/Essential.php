<?php

namespace Amasty\GdprCookie\Model\OptionSource\CookieGroup;

use Magento\Framework\Option\ArrayInterface;

class Essential implements ArrayInterface
{
    const ESSENTIAL = "1";

    const NOT_ESSENTIAL = "0";

    public function toOptionArray()
    {
        return [
            ['value' => self::NOT_ESSENTIAL, 'label' => __('No')],
            ['value' => self::ESSENTIAL, 'label' => __('Yes')]
        ];
    }
}
