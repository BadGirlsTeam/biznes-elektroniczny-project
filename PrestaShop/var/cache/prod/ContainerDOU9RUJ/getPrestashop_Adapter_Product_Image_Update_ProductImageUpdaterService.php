<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.image.update.product_image_updater' shared service.

return $this->services['prestashop.adapter.product.image.update.product_image_updater'] = new \PrestaShop\PrestaShop\Adapter\Product\Image\Update\ProductImageUpdater(($this->services['prestashop.adapter.product.image.repository.product_image_repository'] ?? $this->load('getPrestashop_Adapter_Product_Image_Repository_ProductImageRepositoryService.php')), ($this->services['prestashop.adapter.product.image.uploader.product_image_uploader'] ?? $this->load('getPrestashop_Adapter_Product_Image_Uploader_ProductImageUploaderService.php')), ($this->services['prestashop.core.grid.position.position_update_factory'] ?? $this->load('getPrestashop_Core_Grid_Position_PositionUpdateFactoryService.php')), ($this->services['prestashop.core.grid.image.position_definition'] ?? $this->load('getPrestashop_Core_Grid_Image_PositionDefinitionService.php')), ($this->services['prestashop.core.grid.position.doctrine_grid_position_updater'] ?? $this->load('getPrestashop_Core_Grid_Position_DoctrineGridPositionUpdaterService.php')));
