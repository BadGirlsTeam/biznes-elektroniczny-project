<?php
/* Smarty version 4.2.1, created on 2023-01-08 14:53:01
  from '/var/www/html/admin-dev/themes/default/template/controllers/stats/calendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bacabdd493b9_07448391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bed81ff67f4a6e951d09f5c9b68cf2c2c382ea40' => 
    array (
      0 => '/var/www/html/admin-dev/themes/default/template/controllers/stats/calendar.tpl',
      1 => 1670399274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../form_date_range_picker.tpl' => 1,
  ),
),false)) {
function content_63bacabdd493b9_07448391 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="statsContainer" class="col-md-9">
	<?php $_smarty_tpl->_subTemplateRender("file:../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
