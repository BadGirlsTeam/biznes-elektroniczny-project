<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.admin.geolocation.whitelist.form_data_provider' shared service.

return $this->services['prestashop.admin.geolocation.whitelist.form_data_provider'] = new \PrestaShopBundle\Form\Admin\Improve\International\Geolocation\GeolocationWhitelistFormDataProvider(($this->services['prestashop.adapter.geolocation_ip_address_whitelist.configuration'] ?? $this->load('getPrestashop_Adapter_GeolocationIpAddressWhitelist_ConfigurationService.php')), ($this->services['prestashop.core.validation.validator'] ?? $this->load('getPrestashop_Core_Validation_ValidatorService.php')));
