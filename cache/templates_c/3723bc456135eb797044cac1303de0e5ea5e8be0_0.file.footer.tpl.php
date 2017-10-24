<?php /* Smarty version 3.1.24, created on 2017-03-28 20:49:49
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Default/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:66473431658dabe5dcd4056_55158995%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3723bc456135eb797044cac1303de0e5ea5e8be0' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Default/footer.tpl',
      1 => 1490715520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66473431658dabe5dcd4056_55158995',
  'variables' => 
  array (
    'SOCIAL_MEDIA_ICONS' => 0,
    'FOOTER_NAVIGATION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58dabe5dcdcce9_80635457',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58dabe5dcdcce9_80635457')) {
function content_58dabe5dcdcce9_80635457 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '66473431658dabe5dcd4056_55158995';
?>
<footer>
  <div class="container">
    <hr>
    <?php echo $_smarty_tpl->tpl_vars['SOCIAL_MEDIA_ICONS']->value;?>

    <span class="pull-right">
      <?php echo $_smarty_tpl->tpl_vars['FOOTER_NAVIGATION']->value;?>

    </span>
  </div>
</footer><?php }
}
?>