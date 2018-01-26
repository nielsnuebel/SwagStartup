<?php

namespace SwagStartup\Subscribers;

use Enlight\Event\SubscriberInterface;

class FrontendRoutingSubscriber implements SubscriberInterface
{
  public static function getSubscribedEvents()
  {
    return [
      'Enlight_Controller_Action_PreDispatch_Frontend_RoutingDemonstration' => 'onPreDispatch'
    ];
  }

  public function onPreDispatch(\Enlight_Event_EventArgs $args)
  {
    /** @var \Shopware_Controllers_Frontend_RoutingDemonstration $controller */
    $controller = $args->getSubject();

    $controller->View()->addTemplateDir(__DIR__ . '/../Resources/views');
  }
}