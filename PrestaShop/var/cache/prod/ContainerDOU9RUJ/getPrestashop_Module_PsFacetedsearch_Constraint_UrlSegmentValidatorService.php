<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.module.ps_facetedsearch.constraint.url_segment_validator' shared service.

return $this->services['prestashop.module.ps_facetedsearch.constraint.url_segment_validator'] = new \PrestaShop\Module\FacetedSearch\Constraint\UrlSegmentValidator(($this->services['prestashop.adapter.tools'] ?? ($this->services['prestashop.adapter.tools'] = new \PrestaShop\PrestaShop\Adapter\Tools())));
