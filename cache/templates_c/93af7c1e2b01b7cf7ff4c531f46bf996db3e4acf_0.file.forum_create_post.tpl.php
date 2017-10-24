<?php /* Smarty version 3.1.24, created on 2017-04-01 18:25:44
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Tropical/forum_create_post.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:58938218558dfe2988945b8_72191228%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93af7c1e2b01b7cf7ff4c531f46bf996db3e4acf' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Tropical/forum_create_post.tpl',
      1 => 1488651597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58938218558dfe2988945b8_72191228',
  'variables' => 
  array (
    'CREATING_POST_IN' => 0,
    'LOCKED_MESSAGE' => 0,
    'FORM_CONTENT' => 0,
    'TOPIC_ID' => 0,
    'CONFIRM' => 0,
    'CANCEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58dfe2989387a0_40354075',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58dfe2989387a0_40354075')) {
function content_58dfe2989387a0_40354075 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '58938218558dfe2988945b8_72191228';
?>
<div class="container">
  <h3><?php echo $_smarty_tpl->tpl_vars['CREATING_POST_IN']->value;?>
</h3>
  <?php echo $_smarty_tpl->tpl_vars['LOCKED_MESSAGE']->value;?>

  <form action="" method="post">
    <?php echo $_smarty_tpl->tpl_vars['FORM_CONTENT']->value;?>

	<a href="/forum/view_topic/?tid=<?php echo $_smarty_tpl->tpl_vars['TOPIC_ID']->value;?>
" class="btn btn-danger" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['CONFIRM']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
  </form>
</div><?php }
}
?>