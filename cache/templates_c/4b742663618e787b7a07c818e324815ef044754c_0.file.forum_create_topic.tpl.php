<?php /* Smarty version 3.1.24, created on 2017-03-29 09:58:13
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/PRIME/forum_create_topic.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:149021059358db7725ade295_74350283%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b742663618e787b7a07c818e324815ef044754c' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/PRIME/forum_create_topic.tpl',
      1 => 1488651597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149021059358db7725ade295_74350283',
  'variables' => 
  array (
    'CREATING_TOPIC_IN' => 0,
    'SESSION' => 0,
    'FORM_CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58db7725b89587_31085940',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58db7725b89587_31085940')) {
function content_58db7725b89587_31085940 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '149021059358db7725ade295_74350283';
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