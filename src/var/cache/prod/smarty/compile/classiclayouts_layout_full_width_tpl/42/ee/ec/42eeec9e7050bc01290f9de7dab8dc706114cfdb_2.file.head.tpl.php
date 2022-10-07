<?php
/* Smarty version 3.1.43, created on 2022-10-07 18:54:10
  from 'C:\xampp\htdocs\biznes-elektroniczny-project\src\themes\classic\templates\_partials\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_634059b226d2c3_22786266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42eeec9e7050bc01290f9de7dab8dc706114cfdb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biznes-elektroniczny-project\\src\\themes\\classic\\templates\\_partials\\head.tpl',
      1 => 1658334665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/head-jsonld.tpl' => 1,
    'file:_partials/pagination-seo.tpl' => 1,
    'file:_partials/stylesheets.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_634059b226d2c3_22786266 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_956367556634059b2251e96_36518050', 'head_charset');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1302686524634059b2252cd5_12784203', 'head_ie_compatibility');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73245732634059b2253635_63955928', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_254069031634059b22628e4_88436525', 'head_viewport');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1123442791634059b2263130_02207988', 'head_icons');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182624764634059b2266a99_57442488', 'stylesheets');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1114611366634059b2268aa4_53571024', 'javascript_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1847090688634059b226b016_00775581', 'hook_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2140210272634059b226c837_16498504', 'hook_extra');
}
/* {block 'head_charset'} */
class Block_956367556634059b2251e96_36518050 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_charset' => 
  array (
    0 => 'Block_956367556634059b2251e96_36518050',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta charset="utf-8">
<?php
}
}
/* {/block 'head_charset'} */
/* {block 'head_ie_compatibility'} */
class Block_1302686524634059b2252cd5_12784203 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_ie_compatibility' => 
  array (
    0 => 'Block_1302686524634059b2252cd5_12784203',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta http-equiv="x-ua-compatible" content="ie=edge">
<?php
}
}
/* {/block 'head_ie_compatibility'} */
/* {block 'head_seo_title'} */
class Block_747875347634059b2253ae3_12358404 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'hook_after_title_tag'} */
class Block_1903515356634059b2254c60_36466577 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterTitleTag'),$_smarty_tpl ) );?>

  <?php
}
}
/* {/block 'hook_after_title_tag'} */
/* {block 'head_seo_description'} */
class Block_973922276634059b2255997_65164695 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_171572163634059b2256921_95516540 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_hreflang'} */
class Block_1450018521634059b22598e8_49179479 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['urls']->value['alternative_langs'], 'pageUrl', false, 'code');
$_smarty_tpl->tpl_vars['pageUrl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['pageUrl']->value) {
$_smarty_tpl->tpl_vars['pageUrl']->do_else = false;
?>
      <link rel="alternate" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageUrl']->value, ENT_QUOTES, 'UTF-8');?>
" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php
}
}
/* {/block 'head_hreflang'} */
/* {block 'head_microdata'} */
class Block_133727519634059b225b906_45222620 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:_partials/microdata/head-jsonld.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'head_microdata'} */
/* {block 'head_microdata_special'} */
class Block_788711957634059b225cb88_32361052 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_microdata_special'} */
/* {block 'head_pagination_seo'} */
class Block_845606127634059b225d2d3_11098403 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:_partials/pagination-seo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'head_pagination_seo'} */
/* {block 'head_open_graph'} */
class Block_1155504651634059b225ec00_43498559 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php if (!(isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'product') {?><meta property="og:type" content="website" /><?php }?>
  <?php
}
}
/* {/block 'head_open_graph'} */
/* {block 'head_seo'} */
class Block_73245732634059b2253635_63955928 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_73245732634059b2253635_63955928',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_747875347634059b2253ae3_12358404',
  ),
  'hook_after_title_tag' => 
  array (
    0 => 'Block_1903515356634059b2254c60_36466577',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_973922276634059b2255997_65164695',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_171572163634059b2256921_95516540',
  ),
  'head_hreflang' => 
  array (
    0 => 'Block_1450018521634059b22598e8_49179479',
  ),
  'head_microdata' => 
  array (
    0 => 'Block_133727519634059b225b906_45222620',
  ),
  'head_microdata_special' => 
  array (
    0 => 'Block_788711957634059b225cb88_32361052',
  ),
  'head_pagination_seo' => 
  array (
    0 => 'Block_845606127634059b225d2d3_11098403',
  ),
  'head_open_graph' => 
  array (
    0 => 'Block_1155504651634059b225ec00_43498559',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_747875347634059b2253ae3_12358404', 'head_seo_title', $this->tplIndex);
?>
</title>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1903515356634059b2254c60_36466577', 'hook_after_title_tag', $this->tplIndex);
?>

  <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_973922276634059b2255997_65164695', 'head_seo_description', $this->tplIndex);
?>
">
  <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171572163634059b2256921_95516540', 'head_seo_keywords', $this->tplIndex);
?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots'] !== 'index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1450018521634059b22598e8_49179479', 'head_hreflang', $this->tplIndex);
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133727519634059b225b906_45222620', 'head_microdata', $this->tplIndex);
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_788711957634059b225cb88_32361052', 'head_microdata_special', $this->tplIndex);
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_845606127634059b225d2d3_11098403', 'head_pagination_seo', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1155504651634059b225ec00_43498559', 'head_open_graph', $this->tplIndex);
?>
  
<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head_viewport'} */
class Block_254069031634059b22628e4_88436525 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_254069031634059b22628e4_88436525',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php
}
}
/* {/block 'head_viewport'} */
/* {block 'head_icons'} */
class Block_1123442791634059b2263130_02207988 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_1123442791634059b2263130_02207988',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_icons'} */
/* {block 'stylesheets'} */
class Block_182624764634059b2266a99_57442488 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_182624764634059b2266a99_57442488',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
}
}
/* {/block 'stylesheets'} */
/* {block 'javascript_head'} */
class Block_1114611366634059b2268aa4_53571024 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_1114611366634059b2268aa4_53571024',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, false);
}
}
/* {/block 'javascript_head'} */
/* {block 'hook_header'} */
class Block_1847090688634059b226b016_00775581 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_header' => 
  array (
    0 => 'Block_1847090688634059b226b016_00775581',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

<?php
}
}
/* {/block 'hook_header'} */
/* {block 'hook_extra'} */
class Block_2140210272634059b226c837_16498504 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_extra' => 
  array (
    0 => 'Block_2140210272634059b226c837_16498504',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_extra'} */
}
