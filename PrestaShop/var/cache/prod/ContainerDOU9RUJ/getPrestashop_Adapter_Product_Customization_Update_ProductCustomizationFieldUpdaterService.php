<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.customization.update.product_customization_field_updater' shared service.

return $this->services['prestashop.adapter.product.customization.update.product_customization_field_updater'] = new \PrestaShop\PrestaShop\Adapter\Product\Customization\Update\ProductCustomizationFieldUpdater(($this->services['prestashop.adapter.product.customization.repository.customization_field_repository'] ?? $this->load('getPrestashop_Adapter_Product_Customization_Repository_CustomizationFieldRepositoryService.php')), ($this->services['prestashop.adapter.product.customization.update.customization_field_deleter'] ?? $this->load('getPrestashop_Adapter_Product_Customization_Update_CustomizationFieldDeleterService.php')), ($this->services['prestashop.adapter.product.repository.product_repository'] ?? $this->load('getPrestashop_Adapter_Product_Repository_ProductRepositoryService.php')));
