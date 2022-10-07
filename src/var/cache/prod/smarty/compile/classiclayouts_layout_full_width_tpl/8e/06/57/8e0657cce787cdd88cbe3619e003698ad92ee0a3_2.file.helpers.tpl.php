<?php
/* Smarty version 3.1.43, created on 2022-10-07 18:54:10
  from 'C:\xampp\htdocs\biznes-elektroniczny-project\src\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_634059b2179117_58325063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e0657cce787cdd88cbe3619e003698ad92ee0a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biznes-elektroniczny-project\\src\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1658334665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634059b2179117_58325063 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\biznes-elektroniczny-project\\src\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\8e\\06\\57\\8e0657cce787cdd88cbe3619e003698ad92ee0a3_2.file.helpers.tpl.php',
    'uid' => '8e0657cce787cdd88cbe3619e003698ad92ee0a3',
    'call_name' => 'smarty_template_function_renderLogo_258682784634059b216c997_09154002',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_258682784634059b216c997_09154002 */
if (!function_exists('smarty_template_function_renderLogo_258682784634059b216c997_09154002')) {
function smarty_template_function_renderLogo_258682784634059b216c997_09154002(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_258682784634059b216c997_09154002 */
}
