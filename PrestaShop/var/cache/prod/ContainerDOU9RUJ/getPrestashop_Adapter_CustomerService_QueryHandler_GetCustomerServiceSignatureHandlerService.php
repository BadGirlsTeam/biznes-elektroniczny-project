<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.customer_service.query_handler.get_customer_service_signature_handler' shared service.

return $this->services['prestashop.adapter.customer_service.query_handler.get_customer_service_signature_handler'] = new \PrestaShop\PrestaShop\Core\Domain\CustomerService\QueryHandler\GetCustomerServiceSignatureHandler(($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())));
