<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.translation.extractor.theme' shared service.

return $this->services['prestashop.translation.extractor.theme'] = new \PrestaShop\PrestaShop\Core\Translation\Storage\Extractor\ThemeExtractor(($this->services['prestashop.translation.extractor.smarty.legacy'] ?? $this->load('getPrestashop_Translation_Extractor_Smarty_LegacyService.php')));
