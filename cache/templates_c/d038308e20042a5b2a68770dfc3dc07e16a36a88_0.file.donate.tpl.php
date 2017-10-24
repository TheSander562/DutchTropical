<?php /* Smarty version 3.1.24, created on 2017-03-27 16:35:23
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/addons/Donate/template/donate.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:180994936458d9313b6f8356_58378942%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd038308e20042a5b2a68770dfc3dc07e16a36a88' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/addons/Donate/template/donate.tpl',
      1 => 1490626136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180994936458d9313b6f8356_58378942',
  'variables' => 
  array (
    'LATEST_DONORS' => 0,
    'LATEST_DONORS_LIST' => 0,
    'CATEGORIES_LIST' => 0,
    'CATEGORIES_CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58d9313b786294_55074340',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d9313b786294_55074340')) {
function content_58d9313b786294_55074340 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '180994936458d9313b6f8356_58378942';
?>
<div class="container">
  <br />
  <div class="row">
    <div class="col-md-3">
	  <div class="well well-sm">
	    <h3><strong><?php echo $_smarty_tpl->tpl_vars['LATEST_DONORS']->value;?>
</strong></h3>
		<?php echo $_smarty_tpl->tpl_vars['LATEST_DONORS_LIST']->value;?>

	  </div>
	</div>
	<div class="col-md-9">
	  <?php echo $_smarty_tpl->tpl_vars['CATEGORIES_LIST']->value;?>

	  <br />
	  <?php echo $_smarty_tpl->tpl_vars['CATEGORIES_CONTENT']->value;?>

	</div>
  </div>
</div><?php }
}
?>