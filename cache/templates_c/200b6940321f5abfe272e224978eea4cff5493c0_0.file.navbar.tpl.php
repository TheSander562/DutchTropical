<?php /* Smarty version 3.1.24, created on 2017-04-08 18:32:16
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/styles/templates/Tropical/navbar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:93226955158e91ea04a6f40_23526538%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '200b6940321f5abfe272e224978eea4cff5493c0' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/styles/templates/Tropical/navbar.tpl',
      1 => 1490882661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93226955158e91ea04a6f40_23526538',
  'variables' => 
  array (
    'SITE_NAME' => 0,
    'NAVBAR_INVERSE' => 0,
    'NAVBAR_LINKS' => 0,
    'USER_AREA' => 0,
    'GLOBAL_MESSAGES' => 0,
    'ANNOUNCEMENTS' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58e91ea059ec73_05072789',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58e91ea059ec73_05072789')) {
function content_58e91ea059ec73_05072789 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '93226955158e91ea04a6f40_23526538';
?>

<section id="intro">
    <div class="content">
        <div class="container">
            <div class="row">
            <div class="col-md-12 col-sm-12">
            <h1><a class="line" href="/"><?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
</a></h1>
            </div>
            </div>
     </div>
    </div>
</section>
<nav class="navbar navbar-default navbar-static-top<?php echo $_smarty_tpl->tpl_vars['NAVBAR_INVERSE']->value;?>
">
<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_navbar_collapse">
	  <span class="sr-only">Toggle navigation</span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="/"></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="main_navbar_collapse">
	<ul class="nav navbar-nav">
	  <?php echo $_smarty_tpl->tpl_vars['NAVBAR_LINKS']->value;?>

	</ul>
	<ul class="nav navbar-nav navbar-right">
	  
	  <?php echo $_smarty_tpl->tpl_vars['USER_AREA']->value;?>

	</ul>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container -->
</nav>

<br />
<div class="container">
<?php echo $_smarty_tpl->tpl_vars['GLOBAL_MESSAGES']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['ANNOUNCEMENTS']->value) && !empty($_smarty_tpl->tpl_vars['ANNOUNCEMENTS']->value)) {?>
  <?php
$_from = $_smarty_tpl->tpl_vars['ANNOUNCEMENTS']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
    <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['item']->value['type'];
if ($_smarty_tpl->tpl_vars['item']->value['can_close'] == 1) {?> alert-announcement-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
 alert-dismissible<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
	  <?php if ($_smarty_tpl->tpl_vars['item']->value['can_close'] == 1) {?><button type="button" class="close close-announcement" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><?php }?>
	  <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

    </div>
  <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
<?php }?>
  </div>
<?php }
}
?>