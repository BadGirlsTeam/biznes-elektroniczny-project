<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.sell.order.internal_note' shared service.

return $this->services['form.type.sell.order.internal_note'] = new \PrestaShopBundle\Form\Admin\Sell\Order\InternalNoteType(($this->services['translator'] ?? $this->getTranslatorService()));
