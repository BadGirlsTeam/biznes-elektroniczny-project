<?php
/* Smarty version 4.2.1, created on 2023-01-08 16:32:36
  from '/var/www/html/themes/classic/templates/customer/_partials/account-transformation-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bae2140a3cb1_45858878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50c5523367c0b6b4dab723e6386150497dbb781f' => 
    array (
      0 => '/var/www/html/themes/classic/templates/customer/_partials/account-transformation-form.tpl',
      1 => 1670399274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bae2140a3cb1_45858878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87254014663bae2140981f3_78221273', 'account_transformation_form');
?>

<?php }
/* {block 'account_transformation_form'} */
class Block_87254014663bae2140981f3_78221273 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'account_transformation_form' => 
  array (
    0 => 'Block_87254014663bae2140981f3_78221273',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save time on your next order, sign up now','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h4>
  <ul>
    <li> - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Personalized and secure access','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</li>
    <li> - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fast and easy checkout','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</li>
    <li> - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Easier merchandise return','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</li>
  </ul>
  <form method="post">
    <div class="form-group">
      <label class="form-control-label required" for="field-email">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set your password:','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>

      </label>
      <input type="password" class="form-control" data-validate="isPasswd" required name="password" value="">
    </div>
    <footer class="form-footer">
      <input type="hidden" name="submitTransformGuestToCustomer" value="1">
      <button class="btn btn-primary" type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create account','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
    </footer>
  </form>
<?php
}
}
/* {/block 'account_transformation_form'} */
}
