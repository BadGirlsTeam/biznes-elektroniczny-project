<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.sql_manager.command_handler.add_request_sql' shared service.

return $this->services['prestashop.adapter.sql_manager.command_handler.add_request_sql'] = new \PrestaShop\PrestaShop\Adapter\SqlManager\CommandHandler\AddSqlRequestHandler(($this->services['prestashop.adapter.sql_manager.sql_query_validator'] ?? ($this->services['prestashop.adapter.sql_manager.sql_query_validator'] = new \PrestaShop\PrestaShop\Adapter\SqlManager\SqlQueryValidator())), ($this->services['translator'] ?? $this->getTranslatorService()));
