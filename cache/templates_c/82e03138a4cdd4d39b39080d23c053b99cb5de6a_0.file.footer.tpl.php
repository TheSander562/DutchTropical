<?php /* Smarty version 3.1.24, created on 2017-04-08 18:32:16
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/styles/templates/Tropical/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30913218258e91ea07f1830_66563478%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82e03138a4cdd4d39b39080d23c053b99cb5de6a' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/styles/templates/Tropical/footer.tpl',
      1 => 1488651597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30913218258e91ea07f1830_66563478',
  'variables' => 
  array (
    'SOCIAL_MEDIA_ICONS' => 0,
    'FOOTER_NAVIGATION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58e91ea07fcce5_92575383',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58e91ea07fcce5_92575383')) {
function content_58e91ea07fcce5_92575383 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30913218258e91ea07f1830_66563478';
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