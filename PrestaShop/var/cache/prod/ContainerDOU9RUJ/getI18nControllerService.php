<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\I18nController' shared service.

$this->services['PrestaShopBundle\\Controller\\Api\\I18nController'] = $instance = new \PrestaShopBundle\Controller\Api\I18nController();

$instance->setLogger(($this->services['logger'] ?? $this->getLoggerService()));
$instance->setContainer($this);

return $instance;
