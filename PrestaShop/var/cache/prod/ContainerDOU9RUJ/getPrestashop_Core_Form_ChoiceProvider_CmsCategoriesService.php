<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.choice_provider.cms_categories' shared service.

return $this->services['prestashop.core.form.choice_provider.cms_categories'] = new \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\CmsCategoriesChoiceProvider(($this->services['prestashop.adapter.cms_page.categories_provider'] ?? $this->load('getPrestashop_Adapter_CmsPage_CategoriesProviderService.php'))->getAllNestedCategories());
