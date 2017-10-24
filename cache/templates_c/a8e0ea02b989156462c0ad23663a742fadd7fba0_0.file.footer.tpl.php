<?php /* Smarty version 3.1.24, created on 2017-03-28 14:57:21
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/PRIME/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:127035967358da6bc1d435c0_43321559%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8e0ea02b989156462c0ad23663a742fadd7fba0' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/PRIME/footer.tpl',
      1 => 1490709103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127035967358da6bc1d435c0_43321559',
  'variables' => 
  array (
    'SOCIAL_MEDIA_ICONS' => 0,
    'FOOTER_NAVIGATION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58da6bc1d4b995_24014433',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58da6bc1d4b995_24014433')) {
function content_58da6bc1d4b995_24014433 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '127035967358da6bc1d435c0_43321559';
?>
<footer>
<section id="foot">
  <div class="container">
    <div class="row">
    <hr>
    <?php echo $_smarty_tpl->tpl_vars['SOCIAL_MEDIA_ICONS']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['FOOTER_NAVIGATION']->value;?>

    <hr>
      </div>
     </div>
    </div>
</footer>
    <?php }
}
?>