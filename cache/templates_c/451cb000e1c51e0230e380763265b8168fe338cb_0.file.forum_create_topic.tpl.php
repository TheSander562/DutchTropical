<?php /* Smarty version 3.1.24, created on 2017-03-28 08:43:12
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Default/forum_create_topic.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19800810558da1410190164_94900800%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '451cb000e1c51e0230e380763265b8168fe338cb' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Default/forum_create_topic.tpl',
      1 => 1490626276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19800810558da1410190164_94900800',
  'variables' => 
  array (
    'CREATING_TOPIC_IN' => 0,
    'SESSION' => 0,
    'FORM_CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58da1410221f87_82143114',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58da1410221f87_82143114')) {
function content_58da1410221f87_82143114 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19800810558da1410190164_94900800';
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