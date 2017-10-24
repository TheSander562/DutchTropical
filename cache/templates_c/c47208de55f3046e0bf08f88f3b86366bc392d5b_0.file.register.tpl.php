<?php /* Smarty version 3.1.24, created on 2017-03-27 16:01:20
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Default/register.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:49661508258d929408afed6_53144915%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c47208de55f3046e0bf08f88f3b86366bc392d5b' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Default/register.tpl',
      1 => 1490626276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49661508258d929408afed6_53144915',
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
  'unifunc' => 'content_58d92940934647_13106197',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d92940934647_13106197')) {
function content_58d92940934647_13106197 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '49661508258d929408afed6_53144915';
?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" action="" method="post">
				<h2><?php echo $_smarty_tpl->tpl_vars['CREATE_AN_ACCOUNT']->value;?>
</h2>
				<?php echo $_smarty_tpl->tpl_vars['SESSION_FLASH']->value;?>

				<?php echo $_smarty_tpl->tpl_vars['REGISTRATION_ERROR']->value;?>

				<hr class="colorgraph">
				<?php echo $_smarty_tpl->tpl_vars['FORM_CONTENT']->value;?>

				<hr class="colorgraph">
				<?php echo $_smarty_tpl->tpl_vars['FORM_SUBMIT']->value;?>

			</form>
		</div>
	</div>
</div><?php }
}
?>