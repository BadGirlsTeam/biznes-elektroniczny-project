<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.order.change_order_address' shared service.

return $this->services['form.type.order.change_order_address'] = new \PrestaShopBundle\Form\Admin\Sell\Order\ChangeOrderAddressType(($this->services['prestashop.core.form.choice_provider.customer_addresses_by_id'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_CustomerAddressesByIdService.php')));
