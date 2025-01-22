<?php

namespace DigitalMarketingFramework\Typo3\Notification\Mail\Registry\EventListener;

use DigitalMarketingFramework\Notification\Mail\NotificationMailInitialization;
use DigitalMarketingFramework\Typo3\Core\Registry\EventListener\AbstractCoreRegistryUpdateEventListener;
use DigitalMarketingFramework\Typo3\Mail\Manager\MailManager;

class CoreRegistryUpdateEventListener extends AbstractCoreRegistryUpdateEventListener
{
    public function __construct(MailManager $mailManager)
    {
        parent::__construct(new NotificationMailInitialization($mailManager, 'dmf_notification_mail'));
    }
}
