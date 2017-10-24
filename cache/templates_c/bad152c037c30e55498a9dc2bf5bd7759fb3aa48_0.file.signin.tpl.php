<?php /* Smarty version 3.1.24, created on 2017-04-08 18:32:50
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/styles/templates/Tropical/signin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:123411723058e91ec2aa41b8_81753161%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bad152c037c30e55498a9dc2bf5bd7759fb3aa48' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/styles/templates/Tropical/signin.tpl',
      1 => 1488651597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123411723058e91ec2aa41b8_81753161',
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
  'unifunc' => 'content_58e91ec2b37df9_55561174',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58e91ec2b37df9_55561174')) {
function content_58e91ec2b37df9_55561174 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '123411723058e91ec2aa41b8_81753161';
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