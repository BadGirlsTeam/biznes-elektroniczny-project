<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.integer_min_max_filter' shared service.

$this->services['form.type.integer_min_max_filter'] = $instance = new \PrestaShopBundle\Form\Admin\Type\IntegerMinMaxFilterType();

$instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));

return $instance;
