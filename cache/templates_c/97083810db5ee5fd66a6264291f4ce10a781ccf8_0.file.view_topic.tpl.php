<?php /* Smarty version 3.1.24, created on 2017-03-29 18:03:21
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Tropical/view_topic.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:48555825458dbe8d9071223_14456197%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97083810db5ee5fd66a6264291f4ce10a781ccf8' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Tropical/view_topic.tpl',
      1 => 1488651597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48555825458dbe8d9071223_14456197',
  'variables' => 
  array (
    'BREADCRUMBS' => 0,
    'SESSION_SUCCESS_POST' => 0,
    'SESSION_FAILURE_POST' => 0,
    'COOKIE_MESSAGE' => 0,
    'BUTTONS' => 0,
    'PAGINATION' => 0,
    'REPLIES' => 0,
    'reply' => 0,
    'POSTS' => 0,
    'REPUTATION' => 0,
    'BY' => 0,
    'AGO' => 0,
    'QUICK_REPLY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58dbe8d916e674_15578041',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58dbe8d916e674_15578041')) {
function content_58dbe8d916e674_15578041 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '48555825458dbe8d9071223_14456197';
?>
<section id="forum">
 <div class="container">
  <?php echo $_smarty_tpl->tpl_vars['BREADCRUMBS']->value;?>

  
  <?php echo $_smarty_tpl->tpl_vars['SESSION_SUCCESS_POST']->value;?>

  <?php echo $_smarty_tpl->tpl_vars['SESSION_FAILURE_POST']->value;?>

  
  <?php echo $_smarty_tpl->tpl_vars['COOKIE_MESSAGE']->value;?>


  <?php echo $_smarty_tpl->tpl_vars['BUTTONS']->value;?>

  
  <br />
  
  <?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

  
  <?php
$_from = $_smarty_tpl->tpl_vars['REPLIES']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['reply'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['reply']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
$_smarty_tpl->tpl_vars['reply']->_loop = true;
$foreach_reply_Sav = $_smarty_tpl->tpl_vars['reply'];
?>
    <div class="panel panel-primary">
	  <div class="panel-heading">
	    <?php echo $_smarty_tpl->tpl_vars['reply']->value['heading'];?>

	  </div>
	  <div class="panel-body" id="<?php echo $_smarty_tpl->tpl_vars['reply']->value['post_id'];?>
">
	    <div class="row">
		  <div class="col-md-3">
		    <center>
			  <?php echo $_smarty_tpl->tpl_vars['reply']->value['avatar'];?>

			  <br /><br />
			  <strong><a href="/profile/<?php echo $_smarty_tpl->tpl_vars['reply']->value['mcname'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['username'];?>
</a></strong>
			  <br />
			  <?php echo $_smarty_tpl->tpl_vars['reply']->value['user_group'];?>

			  <br />
			  <?php echo $_smarty_tpl->tpl_vars['reply']->value['user_title'];?>

			  <hr>
			  <?php echo $_smarty_tpl->tpl_vars['reply']->value['user_posts_count'];?>
 <?php echo $_smarty_tpl->tpl_vars['POSTS']->value;?>
<br />
			  <?php echo $_smarty_tpl->tpl_vars['reply']->value['user_reputation'];?>
 <?php echo $_smarty_tpl->tpl_vars['REPUTATION']->value;?>
<br /><br />
			</center>
			<blockquote>
			  <small>IGN: <?php echo $_smarty_tpl->tpl_vars['reply']->value['mcname'];?>
</small>
			</blockquote>
		  </div>
		  <div class="col-md-9">
		    <?php echo $_smarty_tpl->tpl_vars['BY']->value;?>
 <a href="/profile/<?php echo $_smarty_tpl->tpl_vars['reply']->value['mcname'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['username'];?>
</a> &raquo; <span rel="tooltip" data-trigger="hover" data-original-title="<?php echo $_smarty_tpl->tpl_vars['reply']->value['post_date'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['post_date_rough'];?>
 <?php echo $_smarty_tpl->tpl_vars['AGO']->value;?>
</span>
		    <?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons'];?>

			<hr>
			<div class="forum_post">
			  <?php echo $_smarty_tpl->tpl_vars['reply']->value['content'];?>

			</div>
			<br /><br />
			<span class="pull-right">
			  <?php echo $_smarty_tpl->tpl_vars['reply']->value['reputation'];?>

			</span>
			<br /><br />
			<hr>
			<?php echo $_smarty_tpl->tpl_vars['reply']->value['signature'];?>

		  </div>
		</div>
	  </div>
	</div>
  <?php
$_smarty_tpl->tpl_vars['reply'] = $foreach_reply_Sav;
}
?>
  
  <?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

  
  <?php echo $_smarty_tpl->tpl_vars['QUICK_REPLY']->value;?>

  
</div>
</section><?php }
}
?>