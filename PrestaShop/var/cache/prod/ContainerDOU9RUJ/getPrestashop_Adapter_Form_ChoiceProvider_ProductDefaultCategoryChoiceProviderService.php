<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.form.choice_provider.product_default_category_choice_provider' shared service.

return $this->services['prestashop.adapter.form.choice_provider.product_default_category_choice_provider'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\ProductDefaultCategoryChoiceProvider(($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->getInt("PS_HOME_CATEGORY"), ($this->services['prestashop.adapter.category.repository.category_repository'] ?? $this->load('getPrestashop_Adapter_Category_Repository_CategoryRepositoryService.php')));
