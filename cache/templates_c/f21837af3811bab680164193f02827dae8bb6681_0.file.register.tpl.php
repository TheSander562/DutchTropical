<?php /* Smarty version 3.1.24, created on 2017-03-28 14:59:09
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/PRIME/register.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:64874218258da6c2d8beee0_35125667%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f21837af3811bab680164193f02827dae8bb6681' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/PRIME/register.tpl',
      1 => 1490709103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64874218258da6c2d8beee0_35125667',
  'variables' => 
  array (
    'CREATE_AN_ACCOUNT' => 0,
    'SESSION_FLASH' => 0,
    'REGISTRATION_ERROR' => 0,
    'FORM_CONTENT' => 0,
    'FORM_SUBMIT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58da6c2d953800_16274672',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58da6c2d953800_16274672')) {
function content_58da6c2d953800_16274672 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '64874218258da6c2d8beee0_35125667';
?>
<section id="signin">
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" action="" method="post">
				<h2><?php echo $_smarty_tpl->tpl_vars['CREATE_AN_ACCOUNT']->value;?>
</h2>
				<?php echo $_smarty_tpl->tpl_vars['SESSION_FLASH']->value;?>

				<?php echo $_smarty_tpl->tpl_vars['REGISTRATION_ERROR']->value;?>

				<hr class="signup">
				<?php echo $_smarty_tpl->tpl_vars['FORM_CONTENT']->value;?>

				<?php echo $_smarty_tpl->tpl_vars['FORM_SUBMIT']->value;?>

			</form>
		</div>
	</div>
</div>
</section><?php }
}
?>