<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.language.command_handler.add_language_handler' shared service.

return $this->services['prestashop.adapter.language.command_handler.add_language_handler'] = new \PrestaShop\PrestaShop\Adapter\Language\CommandHandler\AddLanguageHandler(($this->services['prestashop.adapter.image.image_validator'] ?? $this->load('getPrestashop_Adapter_Image_ImageValidatorService.php')), ($this->services['prestashop.adapter.file.robots_text_file_generator'] ?? ($this->services['prestashop.adapter.file.robots_text_file_generator'] = new \PrestaShop\PrestaShop\Adapter\File\RobotsTextFileGenerator())));
