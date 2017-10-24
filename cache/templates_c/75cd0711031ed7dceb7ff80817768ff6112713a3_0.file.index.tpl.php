<?php /* Smarty version 3.1.24, created on 2017-03-28 14:57:24
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/PRIME/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30269444058da6bc4eaadf1_49662990%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75cd0711031ed7dceb7ff80817768ff6112713a3' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/PRIME/index.tpl',
      1 => 1490709103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30269444058da6bc4eaadf1_49662990',
  'variables' => 
  array (
    'PLAYERS_ONLINE' => 0,
    'CONNECT_WITH' => 0,
    'TWITTER_FEED' => 0,
    'VOICE_VIEWER' => 0,
    'NEWS' => 0,
    'newsArray' => 0,
    'news' => 0,
    'SOCIAL' => 0,
    'VOICE_VIEWER_TITLE' => 0,
    'VOICE_VIEWER_IP' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58da6bc506cdf5_28636448',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58da6bc506cdf5_28636448')) {
function content_58da6bc506cdf5_28636448 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30269444058da6bc4eaadf1_49662990';
?>
<section id="wrapper">
   <div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="header_wrapper">
         <p><?php echo $_smarty_tpl->tpl_vars['PLAYERS_ONLINE']->value;?>
</p>
         <p><?php echo $_smarty_tpl->tpl_vars['CONNECT_WITH']->value;?>
</p>
      </div>
        </div>
    </div>
</div>
</section>
<section id="index">
<div class="container">
  <div class="row">
    <?php if (!empty($_smarty_tpl->tpl_vars['TWITTER_FEED']->value) || !empty($_smarty_tpl->tpl_vars['VOICE_VIEWER']->value)) {?>
    <div class="col-md-9">
	<?php } else { ?>
	<div class="col-md-8 col-md-offset-2">
	<?php }?>
	  <!-- News -->
	  <h2><?php echo $_smarty_tpl->tpl_vars['NEWS']->value;?>
</h2>
        <hr>
	  <?php
$_from = $_smarty_tpl->tpl_vars['newsArray']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['news'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['news']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->_loop = true;
$foreach_news_Sav = $_smarty_tpl->tpl_vars['news'];
?>
	    <div class="panel panel-primary">
		  <div class="panel-heading">
		    <a class="white-text" href="/forum/view_topic/?tid=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a>
              <br>
              <span class="label label-info"><a href="#"><?php echo $_smarty_tpl->tpl_vars['news']->value['date'];?>
</a></span>
		  </div>
		  <div class="panel-body">
		    <?php echo $_smarty_tpl->tpl_vars['news']->value['content'];?>

			<br /><br />
			  <span class="label label-danger"><span class="glyphicon glyphicon-comment"></span> <?php echo $_smarty_tpl->tpl_vars['news']->value['replies'];?>
 | <span class="glyphicon glyphicon-eye-open"></span> <?php echo $_smarty_tpl->tpl_vars['news']->value['views'];?>
</span>
			<span class="pull-right"><a class="white-text" href="/profile/<?php echo $_smarty_tpl->tpl_vars['news']->value['author_mcname'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['author_username'];?>
</a> <?php echo $_smarty_tpl->tpl_vars['news']->value['author_avatar'];?>
</span>
		  </div>
		</div>
	  <?php
$_smarty_tpl->tpl_vars['news'] = $foreach_news_Sav;
}
?>
	</div>
	<?php if (!empty($_smarty_tpl->tpl_vars['TWITTER_FEED']->value) || !empty($_smarty_tpl->tpl_vars['VOICE_VIEWER']->value)) {?>
	<div class="col-md-3">
	  <!-- Social -->
	  <h2><?php echo $_smarty_tpl->tpl_vars['SOCIAL']->value;?>
</h2>
        <hr>
        
    <div class="header_wrapper">
	  <?php if (!empty($_smarty_tpl->tpl_vars['TWITTER_FEED']->value)) {?>
	  <?php echo $_smarty_tpl->tpl_vars['TWITTER_FEED']->value;?>

	  <?php }?>
        </div>
	  <?php if (!empty($_smarty_tpl->tpl_vars['VOICE_VIEWER']->value)) {?>
	  <?php ob_start();
echo $_smarty_tpl->tpl_vars['VOICE_VIEWER_TITLE']->value;
$_tmp1=ob_get_clean();
if ($_tmp1 != 'Discord') {?>
	  <div class="well well-sm">
	  <h4><?php echo $_smarty_tpl->tpl_vars['VOICE_VIEWER_TITLE']->value;?>
</h4>
	  <strong><?php echo $_smarty_tpl->tpl_vars['VOICE_VIEWER_IP']->value;?>
</strong><br />
	  <?php echo $_smarty_tpl->tpl_vars['VOICE_VIEWER']->value;?>

	  </div>
	  <?php } else { ?>
	  <?php echo $_smarty_tpl->tpl_vars['VOICE_VIEWER']->value;?>

	  <?php }?>
	  <?php }?>
	</div>
	<?php }?>
  </div>
</div>
</section><?php }
}
?>