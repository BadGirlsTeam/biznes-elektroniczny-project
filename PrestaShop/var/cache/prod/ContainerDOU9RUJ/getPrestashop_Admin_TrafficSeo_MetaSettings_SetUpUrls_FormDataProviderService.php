<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.admin.traffic_seo.meta_settings.set_up_urls.form_data_provider' shared service.

return $this->services['prestashop.admin.traffic_seo.meta_settings.set_up_urls.form_data_provider'] = new \PrestaShopBundle\Form\Admin\Configure\ShopParameters\TrafficSeo\Meta\MetaSettingsSetUpUrlsFormDataProvider(($this->services['prestashop.adapter.meta.set_up_urls.configuration'] ?? $this->load('getPrestashop_Adapter_Meta_SetUpUrls_ConfigurationService.php')));
