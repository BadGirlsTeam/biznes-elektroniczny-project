<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.identifiable_object.builder.category_tree_selector_form_builder' shared service.

return $this->services['prestashop.core.form.identifiable_object.builder.category_tree_selector_form_builder'] = ($this->services['prestashop.core.form.builder.form_builder_factory'] ?? $this->load('getPrestashop_Core_Form_Builder_FormBuilderFactoryService.php'))->create('PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Category\\CategoryTreeSelectorType', ($this->services['prestashop.core.form.identifiable_object.data_provider.empty_form_data_provider'] ?? ($this->services['prestashop.core.form.identifiable_object.data_provider.empty_form_data_provider'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\EmptyFormDataProvider())));
