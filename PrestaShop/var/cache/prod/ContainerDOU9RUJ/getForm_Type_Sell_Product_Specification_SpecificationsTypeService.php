<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.sell.product.specification.specifications_type' shared service.

return $this->services['form.type.sell.product.specification.specifications_type'] = new \PrestaShopBundle\Form\Admin\Sell\Product\Specification\SpecificationsType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getLanguages(), ($this->services['prestashop.core.form.choice_provider.product_condition_choice_provider'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_ProductConditionChoiceProviderService.php')));
