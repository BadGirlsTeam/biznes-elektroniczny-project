<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.data.factory.manufacturer_decorator' shared service.

return $this->services['prestashop.core.grid.data.factory.manufacturer_decorator'] = new \PrestaShop\PrestaShop\Core\Grid\Data\Factory\ManufacturerGridDataFactory(($this->services['prestashop.core.grid.data.factory.manufacturer'] ?? $this->load('getPrestashop_Core_Grid_Data_Factory_ManufacturerService.php')), ($this->services['prestashop.adapter.manufacturer.manufacturer_logo_thumbnail_provider'] ?? $this->load('getPrestashop_Adapter_Manufacturer_ManufacturerLogoThumbnailProviderService.php')));
