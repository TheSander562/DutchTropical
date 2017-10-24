<?php /* Smarty version 3.1.24, created on 2017-03-29 18:02:23
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Tropical/forum_create_topic.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17388256458dbe89fcb22c4_26910198%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7946d1e331ac1cba691778c8c2b99c59ee1a94a1' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Tropical/forum_create_topic.tpl',
      1 => 1488651597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17388256458dbe89fcb22c4_26910198',
  'variables' => 
  array (
    'CREATING_TOPIC_IN' => 0,
    'SESSION' => 0,
    'FORM_CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58dbe89fd35bb3_36795213',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58dbe89fd35bb3_36795213')) {
function content_58dbe89fd35bb3_36795213 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17388256458dbe89fcb22c4_26910198';
?>
<div class="container">
  <h3><?php echo $_smarty_tpl->tpl_vars['CREATING_TOPIC_IN']->value;?>
</h3>
  <?php echo $_smarty_tpl->tpl_vars['SESSION']->value;?>

  <form action="" method="post">
    <?php echo $_smarty_tpl->tpl_vars['FORM_CONTENT']->value;?>

  </form>
</div><?php }
}
?>