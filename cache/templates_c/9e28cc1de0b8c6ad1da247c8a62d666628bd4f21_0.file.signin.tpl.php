<?php /* Smarty version 3.1.24, created on 2017-03-28 15:11:48
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Default/signin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:188184767458da6f24d61072_48273392%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e28cc1de0b8c6ad1da247c8a62d666628bd4f21' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Default/signin.tpl',
      1 => 1490709102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188184767458da6f24d61072_48273392',
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
  'unifunc' => 'content_58da6f24deb1e5_96987746',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58da6f24deb1e5_96987746')) {
function content_58da6f24deb1e5_96987746 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '188184767458da6f24d61072_48273392';
?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" action="" method="post">
				<h2><?php echo $_smarty_tpl->tpl_vars['SIGNIN']->value;?>
</h2>
				<?php echo $_smarty_tpl->tpl_vars['SESSION_FLASH']->value;?>

				<hr class="colorgraph">
				<?php echo $_smarty_tpl->tpl_vars['FORM_CONTENT']->value;?>

				<hr class="colorgraph">
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
</div><?php }
}
?>