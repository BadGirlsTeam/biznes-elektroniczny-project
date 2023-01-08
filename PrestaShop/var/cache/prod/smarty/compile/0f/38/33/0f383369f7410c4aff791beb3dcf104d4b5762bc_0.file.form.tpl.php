<?php
/* Smarty version 4.2.1, created on 2023-01-08 13:31:25
  from '/var/www/html/admin-dev/themes/default/template/controllers/feature_value/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bab79d851753_12070968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f383369f7410c4aff791beb3dcf104d4b5762bc' => 
    array (
      0 => '/var/www/html/admin-dev/themes/default/template/controllers/feature_value/helpers/form/form.tpl',
      1 => 1670399274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bab79d851753_12070968 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115368494763bab79d80c2e4_35402614', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input_row"} */
class Block_115368494763bab79d80c2e4_35402614 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_115368494763bab79d80c2e4_35402614',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'value') {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFeatureValueForm",'id_feature_value'=>intval($_smarty_tpl->tpl_vars['feature_value']->value->id)),$_smarty_tpl ) );?>

	<?php }
}
}
/* {/block "input_row"} */
}
