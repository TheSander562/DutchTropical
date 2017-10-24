<?php /* Smarty version 3.1.24, created on 2017-03-28 15:00:02
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/PRIME/signin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:105110606958da6c62669ab9_26734107%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b62ec0c05a696bb6df8bdb475f32cb68923b5766' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/PRIME/signin.tpl',
      1 => 1490709103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105110606958da6c62669ab9_26734107',
  'variables' => 
  array (
    'SIGNIN' => 0,
    'SESSION_FLASH' => 0,
    'FORM_CONTENT' => 0,
    'FORM_SUBMIT' => 0,
    'REGISTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58da6c62708ad6_46200188',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58da6c62708ad6_46200188')) {
function content_58da6c62708ad6_46200188 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '105110606958da6c62669ab9_26734107';
?>
<section id="signin">
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" action="" method="post">
				<h2><?php echo $_smarty_tpl->tpl_vars['SIGNIN']->value;?>
</h2>
				<hr class="signup">
				<?php echo $_smarty_tpl->tpl_vars['SESSION_FLASH']->value;?>

				<?php echo $_smarty_tpl->tpl_vars['FORM_CONTENT']->value;?>

				<div class="row">
				  <div class="col-xs-12 col-md-6">
				    <?php echo $_smarty_tpl->tpl_vars['FORM_SUBMIT']->value;?>

				  </div>
				  <div class="col-xs-12 col-md-6">
				    <a class="btn btn-success btn-block btn-lg" href="/register"><?php echo $_smarty_tpl->tpl_vars['REGISTER']->value;?>
</a>
				  </div>
				</div>
			</form>
		</div>
	</div>
</div>
</section><?php }
}
?>