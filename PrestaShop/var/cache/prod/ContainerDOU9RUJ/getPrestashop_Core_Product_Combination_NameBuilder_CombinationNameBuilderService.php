<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.product.combination.name_builder.combination_name_builder' shared service.

return $this->services['prestashop.core.product.combination.name_builder.combination_name_builder'] = new \PrestaShop\PrestaShop\Core\Product\Combination\NameBuilder\CombinationNameBuilder(($this->services['translator'] ?? $this->getTranslatorService()), ', ', ($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("PS_ATTRIBUTE_ANCHOR_SEPARATOR"));
