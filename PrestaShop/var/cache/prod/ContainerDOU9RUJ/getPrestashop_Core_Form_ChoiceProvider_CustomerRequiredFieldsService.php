<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.choice_provider.customer_required_fields' shared service.

return $this->services['prestashop.core.form.choice_provider.customer_required_fields'] = new \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\CustomerRequiredFieldsChoiceProvider(($this->services['translator'] ?? $this->getTranslatorService()));
