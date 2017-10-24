<?php /* Smarty version 3.1.24, created on 2017-03-29 17:51:42
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Tropical/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:39520645358dbe61ecd3789_55565399%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb041d9eacd1e2b7dd6ef63941c935097af37218' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Tropical/footer.tpl',
      1 => 1488651597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39520645358dbe61ecd3789_55565399',
  'variables' => 
  array (
    'SOCIAL_MEDIA_ICONS' => 0,
    'FOOTER_NAVIGATION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58dbe61ecdbab0_20812797',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58dbe61ecdbab0_20812797')) {
function content_58dbe61ecdbab0_20812797 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '39520645358dbe61ecd3789_55565399';
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