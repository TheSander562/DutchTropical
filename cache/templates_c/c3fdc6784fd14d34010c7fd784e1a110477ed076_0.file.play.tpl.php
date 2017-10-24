<?php /* Smarty version 3.1.24, created on 2017-04-05 17:31:13
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Tropical/play.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:162960112258e51bd18d0a65_39215214%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3fdc6784fd14d34010c7fd784e1a110477ed076' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Tropical/play.tpl',
      1 => 1491409866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162960112258e51bd18d0a65_39215214',
  'variables' => 
  array (
    'MAIN_ONLINE' => 0,
    'STATUS' => 0,
    'ONLINE' => 0,
    'OFFLINE' => 0,
    'PLAYERS_ONLINE' => 0,
    'PLAYER_COUNT' => 0,
    'version' => 0,
    'PLAY_TITLE' => 0,
    'SERVER_STATUS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58e51bd199ef31_60717759',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58e51bd199ef31_60717759')) {
function content_58e51bd199ef31_60717759 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '162960112258e51bd18d0a65_39215214';
?>
<div class="container">
  <div class="alert alert-info"><center>Klik om server IP te kopiëren:<br /><span id="ip" onclick="copyToClipboard('#ip')" data-toggle="tooltip" title="Klik om te kopiëren!">play.dutchtropicalmt.nl</span></center></div>
  <div class="row">
    <div class="col-md-3">
	  <div class="well">
	    <table class="table">
		  <tr class="<?php if ($_smarty_tpl->tpl_vars['MAIN_ONLINE']->value == 1) {?>success<?php } else { ?>danger<?php }?>">
			<td><b><?php echo $_smarty_tpl->tpl_vars['STATUS']->value;?>
</b></td>
			<td><?php if ($_smarty_tpl->tpl_vars['MAIN_ONLINE']->value == 1) {
echo $_smarty_tpl->tpl_vars['ONLINE']->value;
} else {
echo $_smarty_tpl->tpl_vars['OFFLINE']->value;
}?></td>
		  </tr>
		  <tr>
		    <td><b><?php echo $_smarty_tpl->tpl_vars['PLAYERS_ONLINE']->value;?>
</b></td>
			<td><?php echo $_smarty_tpl->tpl_vars['PLAYER_COUNT']->value;?>
</td>
		  </tr>
		  <tr>
		    <td><b><?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</b></td>
		  </tr>
		</table>
	  </div>
	</div>
	<div class="col-md-9">
	  <div class="well">
	    <h3><?php echo $_smarty_tpl->tpl_vars['PLAY_TITLE']->value;?>
</h3>
	    <?php echo $_smarty_tpl->tpl_vars['SERVER_STATUS']->value;?>

	  </div>
	</div>
  </div>
</div><?php }
}
?>