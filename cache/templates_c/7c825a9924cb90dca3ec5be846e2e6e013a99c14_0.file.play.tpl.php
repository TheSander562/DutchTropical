<?php /* Smarty version 3.1.24, created on 2017-04-09 12:11:02
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/styles/templates/Tropical/play.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:71272000458ea16c638bba1_50029137%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c825a9924cb90dca3ec5be846e2e6e013a99c14' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/styles/templates/Tropical/play.tpl',
      1 => 1491409866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71272000458ea16c638bba1_50029137',
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
  'unifunc' => 'content_58ea16c645aba0_89379043',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ea16c645aba0_89379043')) {
function content_58ea16c645aba0_89379043 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '71272000458ea16c638bba1_50029137';
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