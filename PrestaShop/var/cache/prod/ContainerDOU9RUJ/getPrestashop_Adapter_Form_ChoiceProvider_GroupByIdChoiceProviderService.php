<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.form.choice_provider.group_by_id_choice_provider' shared service.

return $this->services['prestashop.adapter.form.choice_provider.group_by_id_choice_provider'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\GroupByIdChoiceProvider(($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getLanguage()->id);
