<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.contact.query_handler.get_contact_for_editing' shared service.

return $this->services['prestashop.adapter.contact.query_handler.get_contact_for_editing'] = new \PrestaShop\PrestaShop\Adapter\Contact\QueryHandler\GetContactForEditingHandler(($this->services['prestashop.bundle.form.data_transformer.string_array_to_integer_array'] ?? ($this->services['prestashop.bundle.form.data_transformer.string_array_to_integer_array'] = new \PrestaShopBundle\Form\DataTransformer\StringArrayToIntegerArrayDataTransformer())));
