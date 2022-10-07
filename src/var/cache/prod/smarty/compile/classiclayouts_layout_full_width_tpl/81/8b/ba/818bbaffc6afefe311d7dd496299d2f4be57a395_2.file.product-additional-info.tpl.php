<?php
/* Smarty version 3.1.43, created on 2022-10-07 18:54:35
  from 'C:\xampp\htdocs\biznes-elektroniczny-project\src\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_634059cb3e5e61_95514932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '818bbaffc6afefe311d7dd496299d2f4be57a395' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biznes-elektroniczny-project\\src\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1658334665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634059cb3e5e61_95514932 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
