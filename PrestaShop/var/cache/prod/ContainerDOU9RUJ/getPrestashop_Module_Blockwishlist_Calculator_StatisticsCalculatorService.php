<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.module.blockwishlist.calculator.statistics_calculator' shared service.

return $this->services['prestashop.module.blockwishlist.calculator.statistics_calculator'] = new \PrestaShop\Module\BlockWishList\Calculator\StatisticsCalculator(($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService()), ($this->services['prestashop.core.localization.locale.repository'] ?? $this->getPrestashop_Core_Localization_Locale_RepositoryService())->getLocale(($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->language->getLocale()));
