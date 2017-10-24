<?php /* Smarty version 3.1.24, created on 2017-03-29 19:19:36
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Tropical/register.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:65018624758dbfab88b65d8_89553188%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35544a8335f5ebcdc500166a94f2f689abe47574' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Tropical/register.tpl',
      1 => 1488651597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65018624758dbfab88b65d8_89553188',
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
  'unifunc' => 'content_58dbfab893ffc8_66700438',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58dbfab893ffc8_66700438')) {
function content_58dbfab893ffc8_66700438 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '65018624758dbfab88b65d8_89553188';
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