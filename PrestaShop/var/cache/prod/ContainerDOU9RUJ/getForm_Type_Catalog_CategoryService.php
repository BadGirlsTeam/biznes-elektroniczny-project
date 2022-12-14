<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.catalog.category' shared service.

return $this->services['form.type.catalog.category'] = new \PrestaShopBundle\Form\Admin\Catalog\Category\CategoryType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getLanguages(), ($this->services['prestashop.core.form.choice_provider.group_by_id'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_GroupByIdService.php'))->getChoices(), ($this->services['prestashop.adapter.feature.multistore'] ?? $this->load('getPrestashop_Adapter_Feature_MultistoreService.php')), ($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())));
