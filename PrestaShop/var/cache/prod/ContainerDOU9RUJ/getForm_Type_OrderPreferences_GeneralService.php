<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.order_preferences.general' shared service.

return $this->services['form.type.order_preferences.general'] = new \PrestaShopBundle\Form\Admin\Configure\ShopParameters\OrderPreferences\GeneralType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getLanguages(), ($this->services['prestashop.adapter.data_provider.currency'] ?? $this->getPrestashop_Adapter_DataProvider_CurrencyService())->getDefaultCurrencyIsoCode(), ($this->services['prestashop.adapter.data_provider.cms'] ?? ($this->services['prestashop.adapter.data_provider.cms'] = new \PrestaShop\PrestaShop\Adapter\CMS\CMSDataProvider()))->getCmsChoices());
