<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.bundle.twig.extension.localization_extension' shared service.

return $this->services['prestashop.bundle.twig.extension.localization_extension'] = new \PrestaShopBundle\Twig\Extension\LocalizationExtension(($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->language->date_format_full, ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->language->date_format_lite, ($this->services['prestashop.core.localization.locale.repository'] ?? $this->getPrestashop_Core_Localization_Locale_RepositoryService()), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->language, ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->currency);
