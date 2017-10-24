<?php /* Smarty version 3.1.24, created on 2017-03-28 14:55:05
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Default/play.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:75134856158da6b39cc1017_73289642%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '504ab115a2d1938f03a2c93f22bdb68328cba8cb' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Default/play.tpl',
      1 => 1490709102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75134856158da6b39cc1017_73289642',
  'variables' => 
  array (
    'CONNECT_WITH' => 0,
    'MAIN_ONLINE' => 0,
    'STATUS' => 0,
    'ONLINE' => 0,
    'OFFLINE' => 0,
    'PLAYERS_ONLINE' => 0,
    'PLAYER_COUNT' => 0,
    'QUERIED_IN' => 0,
    'TIMER' => 0,
    'PLAY_TITLE' => 0,
    'SERVER_STATUS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58da6b39d6f6d7_48288401',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58da6b39d6f6d7_48288401')) {
function content_58da6b39d6f6d7_48288401 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '75134856158da6b39cc1017_73289642';
?>
<div class="container">
  <div class="alert alert-info"><center><?php echo $_smarty_tpl->tpl_vars['CONNECT_WITH']->value;?>
</center></div>
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
		    <td><b><?php echo $_smarty_tpl->tpl_vars['QUERIED_IN']->value;?>
</b></td>
			<td><?php echo $_smarty_tpl->tpl_vars['TIMER']->value;?>
</td>
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