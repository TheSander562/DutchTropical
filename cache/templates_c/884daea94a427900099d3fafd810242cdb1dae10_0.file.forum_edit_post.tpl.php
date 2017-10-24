<?php /* Smarty version 3.1.24, created on 2017-03-29 18:03:48
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Tropical/forum_edit_post.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:196384257558dbe8f424e7f9_46258318%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '884daea94a427900099d3fafd810242cdb1dae10' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Tropical/forum_edit_post.tpl',
      1 => 1488651597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196384257558dbe8f424e7f9_46258318',
  'variables' => 
  array (
    'EDITING_POST' => 0,
    'SESSION' => 0,
    'FORM_CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58dbe8f42dfc96_72616890',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58dbe8f42dfc96_72616890')) {
function content_58dbe8f42dfc96_72616890 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '196384257558dbe8f424e7f9_46258318';
?>
<div class="container">
  <h3><?php echo $_smarty_tpl->tpl_vars['EDITING_POST']->value;?>
</h3>
  <?php echo $_smarty_tpl->tpl_vars['SESSION']->value;?>

  <form action="" method="post">
    <?php echo $_smarty_tpl->tpl_vars['FORM_CONTENT']->value;?>

  </form>
</div><?php }
}
?>