<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.compiler.smarty.template' shared service.

return $this->services['prestashop.compiler.smarty.template'] = new \PrestaShop\TranslationToolsBundle\Translation\Compiler\Smarty\TranslationTemplateCompiler('Smarty_Internal_Templatelexer', 'Smarty_Internal_Templateparser', ($this->services['prestashop.smarty'] ?? $this->load('getPrestashop_SmartyService.php')));
