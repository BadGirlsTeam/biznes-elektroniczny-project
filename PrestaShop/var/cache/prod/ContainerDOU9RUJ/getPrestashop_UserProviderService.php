<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.user_provider' shared service.

return $this->services['prestashop.user_provider'] = new \PrestaShopBundle\Service\DataProvider\UserProvider(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
