<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.addon.theme.theme_manager' shared service.

return $this->services['prestashop.core.addon.theme.theme_manager'] = ($this->services['prestashop.core.addon.theme.theme_manager_builder'] ?? $this->load('getPrestashop_Core_Addon_Theme_ThemeManagerBuilderService.php'))->build();
