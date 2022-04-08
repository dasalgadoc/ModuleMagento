<?php

namespace Amasty\GdprCookie\Model;

use Amasty\GdprCookie\Api\CookieConsentRepositoryInterface;
use Amasty\Base\Model\GetCustomerIp;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\Stdlib\DateTime\DateTime;

class CookieConsentLogger
{
    /**
     * @var CookieConsentRepositoryInterface
     */
    private $cookieConsentRepository;

    /**
     * @var CookieConsentFactory
     */
    private $cookieConsentFactory;

    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    /**
     * @var DateTime
     */
    private $date;

    /**
     * @var GetCustomerIp
     */
    private $customerIp;

    /**
     * @var ConfigProvider
     */
    private $configProvider;

    public function __construct(
        CookieConsentRepositoryInterface $cookieConsentRepository,
        CookieConsentFactory $cookieConsentFactory,
        GetCustomerIp $customerIp,
        StoreManagerInterface $storeManager,
        DateTime $date,
        ConfigProvider $configProvider
    ) {
        $this->cookieConsentRepository = $cookieConsentRepository;
        $this->cookieConsentFactory = $cookieConsentFactory;
        $this->storeManager = $storeManager;
        $this->date = $date;
        $this->customerIp = $customerIp;
        $this->configProvider = $configProvider;
    }

    public function logCookieConsent(?int $customerId, $status)
    {
        if (!$customerId && !$this->configProvider->isLogGuest()) {
            return;
        }
        $cookieConsent = $this->cookieConsentRepository->getByCustomerId($customerId);
        $website = $this->storeManager->getWebsite()->getId();
        $customerIp = $this->getRemoteIp();

        if ($cookieConsent && $customerId) {
            $cookieConsent->setCustomerId($customerId)
                ->setConsentStatus($status)
                ->setWebsite($website)
                ->setDateRecieved($this->date->gmtDate())
                ->setCustomerIp($customerIp);
            $this->cookieConsentRepository->save($cookieConsent);

            return;
        }
        $consent = $this->cookieConsentFactory->create();
        $consent->setCustomerId($customerId)
            ->setConsentStatus($status)
            ->setWebsite($this->storeManager->getWebsite()->getId())
            ->setCustomerIp($this->getRemoteIp());
        $this->cookieConsentRepository->save($consent);
    }

    public function getRemoteIp()
    {
        $ip = $this->customerIp->getCurrentIp();
        $ip = substr($ip, 0, strrpos($ip, ".")) . '.0';

        return $ip;
    }
}
