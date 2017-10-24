<?php /* Smarty version 3.1.24, created on 2017-03-29 18:01:25
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Tropical/signin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:87456839858dbe8652b2378_43428916%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d932c1c73b0beb0b17a6d98ba02bb3ab1ae22d7' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Tropical/signin.tpl',
      1 => 1488651597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87456839858dbe8652b2378_43428916',
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
  'unifunc' => 'content_58dbe86533a487_44535212',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58dbe86533a487_44535212')) {
function content_58dbe86533a487_44535212 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '87456839858dbe8652b2378_43428916';
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