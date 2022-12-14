<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.product.options.product_supplier_type' shared service.

return $this->services['form.type.product.options.product_supplier_type'] = new \PrestaShopBundle\Form\Admin\Sell\Product\Options\ProductSupplierType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getLanguages(), ($this->services['prestashop.core.form.choice_provider.currency_by_id'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_CurrencyByIdService.php')), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->currency->iso_code, ($this->services['prestashop.adapter.currency.repository.currency_repository'] ?? ($this->services['prestashop.adapter.currency.repository.currency_repository'] = new \PrestaShop\PrestaShop\Adapter\Currency\Repository\CurrencyRepository())), ($this->services['form.form_cloner'] ?? ($this->services['form.form_cloner'] = new \PrestaShopBundle\Form\FormCloner())));
