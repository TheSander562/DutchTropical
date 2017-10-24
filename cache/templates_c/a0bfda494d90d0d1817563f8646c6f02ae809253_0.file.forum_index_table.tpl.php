<?php /* Smarty version 3.1.24, created on 2017-04-08 18:33:42
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/styles/templates/Tropical/forum_index_table.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:101211795258e91ef65dec51_75981826%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0bfda494d90d0d1817563f8646c6f02ae809253' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/styles/templates/Tropical/forum_index_table.tpl',
      1 => 1488651597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101211795258e91ef65dec51_75981826',
  'variables' => 
  array (
    'BREADCRUMBS' => 0,
    'FORUMS' => 0,
    'parent' => 0,
    'forum' => 0,
    'TOPICS' => 0,
    'POSTS' => 0,
    'NO_TOPICS' => 0,
    'LAST_POST' => 0,
    'BY' => 0,
    'counter' => 0,
    'STATISTICS' => 0,
    'USERS_REGISTERED' => 0,
    'LATEST_MEMBER' => 0,
    'SEARCH_FORM' => 0,
    'SERVER_STATUS' => 0,
    'MAIN_ONLINE' => 0,
    'STATUS' => 0,
    'ONLINE' => 0,
    'OFFLINE' => 0,
    'PLAYERS_ONLINE' => 0,
    'PLAYER_COUNT' => 0,
    'QUERIED_IN' => 0,
    'TIMER' => 0,
    'ONLINE_USERS' => 0,
    'ONLINE_USERS_LIST' => 0,
    'LATEST_POSTS' => 0,
    'postsArray' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58e91ef6841533_10924535',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58e91ef6841533_10924535')) {
function content_58e91ef6841533_10924535 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '101211795258e91ef65dec51_75981826';
?>
<section id="forum">
 <div class="container">
  <div class="row">
	<div class="col-md-9">
	  <?php echo $_smarty_tpl->tpl_vars['BREADCRUMBS']->value;?>

	  <?php
$_from = $_smarty_tpl->tpl_vars['FORUMS']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['parent'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['parent']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['parent']->value) {
$_smarty_tpl->tpl_vars['parent']->_loop = true;
$foreach_parent_Sav = $_smarty_tpl->tpl_vars['parent'];
?>
	    <?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_Variable(1, null, 0);?>
		<div class="panel panel-default">
		  <div class="panel-heading" id="<?php echo $_smarty_tpl->tpl_vars['parent']->value['forum_title'];?>
">
              <?php if ($_smarty_tpl->tpl_vars['parent']->value['forum_type'] == "category") {?>
                  <strong><?php echo $_smarty_tpl->tpl_vars['parent']->value['forum_title'];?>
</strong>
              <?php } else { ?>
                  <a href="/forum/view_forum/?fid=<?php echo $_smarty_tpl->tpl_vars['parent']->value['id'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['parent']->value['forum_title'];?>
</strong></a>
              <?php }?>
		  </div>
      <?php if (count($_smarty_tpl->tpl_vars['parent']->value['forums']) > 0) {?>
		  
  		  <div class="panel-body">
  			<?php
$_from = $_smarty_tpl->tpl_vars['parent']->value['forums'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['forum'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['forum']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['forum']->value) {
$_smarty_tpl->tpl_vars['forum']->_loop = true;
$foreach_forum_Sav = $_smarty_tpl->tpl_vars['forum'];
?>
  		    <div class="row">
  			  <div class="col-md-6">
  				  <a href="/forum/view_forum/?fid=<?php echo $_smarty_tpl->tpl_vars['forum']->value['forum_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['forum']->value['forum_title'];?>
</a>
  				  <br />
  				  <?php echo $_smarty_tpl->tpl_vars['forum']->value['forum_description'];?>
<br />
  				  <?php echo $_smarty_tpl->tpl_vars['forum']->value['subforums'];?>

  			  </div>
  			  <div class="col-md-2">
  				  <strong><?php echo $_smarty_tpl->tpl_vars['forum']->value['forum_topics'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['TOPICS']->value;?>
<br />
  				  <strong><?php echo $_smarty_tpl->tpl_vars['forum']->value['forum_posts'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['POSTS']->value;?>
<br />
  			  </div>
  			  <div class="col-md-4">
  				<?php if ($_smarty_tpl->tpl_vars['forum']->value['forum_topics'] == 0) {?>
  				  <?php echo $_smarty_tpl->tpl_vars['NO_TOPICS']->value;?>

  				<?php } else { ?>
  				  
  				  <div class="row">
  					<div class="col-md-2">
  					  <div class="frame" style="position:static !important;">
  						<a href="/profile/<?php echo $_smarty_tpl->tpl_vars['forum']->value['last_reply_mcname'];?>
"><?php echo $_smarty_tpl->tpl_vars['forum']->value['last_reply_avatar'];?>
</a>
  					  </div>
  					</div>
  					<div class="col-md-9">
  					  <?php echo $_smarty_tpl->tpl_vars['LAST_POST']->value;?>
:
  					  <?php echo $_smarty_tpl->tpl_vars['forum']->value['label'];?>
 <a href="/forum/view_topic/?tid=<?php echo $_smarty_tpl->tpl_vars['forum']->value['last_topic_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['forum']->value['last_topic_name'];?>
</a><br />
  					  <?php echo $_smarty_tpl->tpl_vars['BY']->value;?>
 <a href="/profile/<?php echo $_smarty_tpl->tpl_vars['forum']->value['last_reply_mcname'];?>
"><?php echo $_smarty_tpl->tpl_vars['forum']->value['last_reply_username'];?>
</a><br /><?php echo $_smarty_tpl->tpl_vars['forum']->value['last_topic_time'];?>

  					</div>
  				  </div>
  				<?php }?>
  			  </div>
  			</div>
  			<?php if ((count($_smarty_tpl->tpl_vars['parent']->value['forums'])) != $_smarty_tpl->tpl_vars['counter']->value) {?>
  			<hr>
  			<?php }?>
  			<?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_Variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
  		    <?php
$_smarty_tpl->tpl_vars['forum'] = $foreach_forum_Sav;
}
?>
  		  </div>
      <?php }?>
		</div>
	  <?php
$_smarty_tpl->tpl_vars['parent'] = $foreach_parent_Sav;
}
?>
	  <div class="panel panel-default">
	    <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['STATISTICS']->value;?>
</div>
		<div class="panel-body">
		  <?php echo $_smarty_tpl->tpl_vars['USERS_REGISTERED']->value;?>
<br /><?php echo $_smarty_tpl->tpl_vars['LATEST_MEMBER']->value;?>

		</div>
	  </div>
	</div>
	<div class="col-md-3">
	  <?php echo $_smarty_tpl->tpl_vars['SEARCH_FORM']->value;?>

	  
	  <br />
	  
	  <?php if (!empty($_smarty_tpl->tpl_vars['SERVER_STATUS']->value)) {?>
	  <div class="well">
	    <h4><?php echo $_smarty_tpl->tpl_vars['SERVER_STATUS']->value;?>
</h4>
	    <table class="table">
		  <tr class="<?php if ($_smarty_tpl->tpl_vars['MAIN_ONLINE']->value == 1) {?>success<?php } else { ?>danger<?php }?>">
			<td><b><?php echo $_smarty_tpl->tpl_vars['STATUS']->value;?>
</b></td>
			<td><?php if ($_smarty_tpl->tpl_vars['MAIN_ONLINE']->value == 1) {
echo $_smarty_tpl->tpl_vars['ONLINE']->value;
} else {
echo $_smarty_tpl->tpl_vars['OFFLINE']->value;
}?></td>
		  </tr>
		  <tr>
		    <td><b><?php echo $_smarty_tpl->tpl_vars['PLAYERS_ONLINE']->value;?>
</b></td>
			<td><?php echo $_smarty_tpl->tpl_vars['PLAYER_COUNT']->value;?>
</td>
		  </tr>
		  <tr>
		    <td><b><?php echo $_smarty_tpl->tpl_vars['QUERIED_IN']->value;?>
</b></td>
			<td><?php echo $_smarty_tpl->tpl_vars['TIMER']->value;?>
</td>
		  </tr>
		</table>
	  </div>
	  <?php }?>
	  
	  <div class="panel panel-default">
	    <div class="panel-heading">
		  <?php echo $_smarty_tpl->tpl_vars['ONLINE_USERS']->value;?>

		</div>
		<div class="panel-body">
		  <?php echo $_smarty_tpl->tpl_vars['ONLINE_USERS_LIST']->value;?>

		</div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading">
		  <?php echo $_smarty_tpl->tpl_vars['LATEST_POSTS']->value;?>

		</div>
		<div class="panel-body">
		  <?php
$_from = $_smarty_tpl->tpl_vars['postsArray']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['post']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
$foreach_post_Sav = $_smarty_tpl->tpl_vars['post'];
?>
		    <div class="row">
			  <div class="col-md-3">
			    <div class="frame">
				  <a href="/profile/<?php echo $_smarty_tpl->tpl_vars['post']->value['topic_last_user_mcname'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['topic_last_user_avatar'];?>
</a>
			    </div>
			  </div>
			  <div class="col-md-9">
			    <a href="/forum/view_topic/?tid=<?php echo $_smarty_tpl->tpl_vars['post']->value['topic_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['topic_title'];?>
</a><br />
			    <?php echo $_smarty_tpl->tpl_vars['BY']->value;?>
 <a href="/profile/<?php echo $_smarty_tpl->tpl_vars['post']->value['topic_last_user_mcname'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['topic_last_user_username'];?>
</a><br />
				<span rel="tooltip" data-trigger="hover" data-original-title="<?php echo $_smarty_tpl->tpl_vars['post']->value['topic_reply_date'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['topic_reply_rough'];?>
</span>
			  </div>
		    </div>
			<br />
		  <?php
$_smarty_tpl->tpl_vars['post'] = $foreach_post_Sav;
}
?>
		</div>
	  </div>
	  
	  
	  
	</div>
  </div>
</div>
</section><?php }
}
?>