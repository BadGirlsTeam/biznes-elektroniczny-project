<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.webservice.webservice_key_status_modifier' shared service.

return $this->services['prestashop.adapter.webservice.webservice_key_status_modifier'] = new \PrestaShop\PrestaShop\Adapter\Webservice\WebserviceKeyStatusModifier(($this->services['translator'] ?? $this->getTranslatorService()));
