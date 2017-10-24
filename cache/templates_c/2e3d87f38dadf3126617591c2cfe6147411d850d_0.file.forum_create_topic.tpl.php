<?php /* Smarty version 3.1.24, created on 2017-04-09 12:28:24
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/styles/templates/Tropical/forum_create_topic.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:83124606758ea1ad89c01a7_36319707%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e3d87f38dadf3126617591c2cfe6147411d850d' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/styles/templates/Tropical/forum_create_topic.tpl',
      1 => 1488651597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83124606758ea1ad89c01a7_36319707',
  'variables' => 
  array (
    'CREATING_TOPIC_IN' => 0,
    'SESSION' => 0,
    'FORM_CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58ea1ad8a4c037_32478622',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ea1ad8a4c037_32478622')) {
function content_58ea1ad8a4c037_32478622 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '83124606758ea1ad89c01a7_36319707';
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