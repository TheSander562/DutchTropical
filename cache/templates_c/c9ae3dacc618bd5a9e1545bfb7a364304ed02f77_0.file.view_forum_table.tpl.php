<?php /* Smarty version 3.1.24, created on 2017-03-28 17:22:44
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/PRIME/view_forum_table.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15878365358da8dd4c86b35_76782545%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9ae3dacc618bd5a9e1545bfb7a364304ed02f77' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/PRIME/view_forum_table.tpl',
      1 => 1490709103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15878365358da8dd4c86b35_76782545',
  'variables' => 
  array (
    'BREADCRUMBS' => 0,
    'FORUM_TITLE' => 0,
    'NEW_TOPIC_BUTTON' => 0,
    'SUBFORUMS_EXIST' => 0,
    'SUBFORUMS_LANGUAGE' => 0,
    'FORUM' => 0,
    'STATS' => 0,
    'LAST_POST' => 0,
    'SUBFORUMS' => 0,
    'subforum' => 0,
    'TOPICS_LANGUAGE' => 0,
    'POSTS' => 0,
    'NO_TOPICS' => 0,
    'BY' => 0,
    'TOPIC' => 0,
    'STICKIES' => 0,
    'topic' => 0,
    'VIEWS' => 0,
    'TOPICS' => 0,
    'PAGINATION' => 0,
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
  'unifunc' => 'content_58da8dd4ea8537_76131636',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58da8dd4ea8537_76131636')) {
function content_58da8dd4ea8537_76131636 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15878365358da8dd4c86b35_76782545';
?>
<section id="forum">
 <div class="container">
  <div class="row">
	<div class="col-md-9">
	  <ol class="breadcrumb">
	    <?php echo $_smarty_tpl->tpl_vars['BREADCRUMBS']->value;?>

	  </ol>
	  <h3 style="display:inline;"><?php echo $_smarty_tpl->tpl_vars['FORUM_TITLE']->value;?>
</h3>
	  <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['NEW_TOPIC_BUTTON']->value;?>
</span>
	  <br /><br />
	  <?php if ($_smarty_tpl->tpl_vars['SUBFORUMS_EXIST']->value == 1) {?>
	  <strong><?php echo $_smarty_tpl->tpl_vars['SUBFORUMS_LANGUAGE']->value;?>
</strong>
	  <table class="table table-bordered" style="table-layout:fixed;">
		<colgroup>
		  <col style="width:50%">
		  <col style="width:10%">
		  <col style="width:40%">
		</colgroup>
		<thead>
		  <tr>
			<th><?php echo $_smarty_tpl->tpl_vars['FORUM']->value;?>
</th>
			<th><?php echo $_smarty_tpl->tpl_vars['STATS']->value;?>
</th>
			<th><?php echo $_smarty_tpl->tpl_vars['LAST_POST']->value;?>
</th>
		  </tr>
		</thead>
		<tbody>
		  <?php
$_from = $_smarty_tpl->tpl_vars['SUBFORUMS']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['subforum'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['subforum']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['subforum']->value) {
$_smarty_tpl->tpl_vars['subforum']->_loop = true;
$foreach_subforum_Sav = $_smarty_tpl->tpl_vars['subforum'];
?>
		    <tr>
			  <td>
			    <a href="/forum/view_forum/?fid=<?php echo $_smarty_tpl->tpl_vars['subforum']->value['forum_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['subforum']->value['forum_title'];?>
</a>
				<br />
				<?php echo $_smarty_tpl->tpl_vars['subforum']->value['forum_description'];?>
<br />
			  </td>
			  <td>
			    <strong><?php echo $_smarty_tpl->tpl_vars['subforum']->value['forum_topics'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['TOPICS_LANGUAGE']->value;?>
<br />
				<strong><?php echo $_smarty_tpl->tpl_vars['subforum']->value['forum_posts'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['POSTS']->value;?>
<br />
			  </td>
			  <td>
			    <?php if ($_smarty_tpl->tpl_vars['subforum']->value['forum_topics'] == 0) {?>
				  <?php echo $_smarty_tpl->tpl_vars['NO_TOPICS']->value;?>

				<?php } else { ?>
				  
				  <div class="row">
					<div class="col-md-2">
					  <div class="frame">
						<a href="/profile/<?php echo $_smarty_tpl->tpl_vars['subforum']->value['last_reply_mcname'];?>
"><?php echo $_smarty_tpl->tpl_vars['subforum']->value['last_reply_avatar'];?>
</a>
					  </div>
					</div>
					<div class="col-md-9">
					  <?php echo $_smarty_tpl->tpl_vars['subforum']->value['label'];?>
  <a href="/forum/view_topic/?tid=<?php echo $_smarty_tpl->tpl_vars['subforum']->value['last_topic_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['subforum']->value['last_topic_name'];?>
</a><br />
					  <?php echo $_smarty_tpl->tpl_vars['BY']->value;?>
 <a href="/profile/<?php echo $_smarty_tpl->tpl_vars['subforum']->value['last_reply_mcname'];?>
"><?php echo $_smarty_tpl->tpl_vars['subforum']->value['last_reply_username'];?>
</a><br /><?php echo $_smarty_tpl->tpl_vars['subforum']->value['last_topic_time'];?>

					</div>
				  </div>
				<?php }?>
			  </td>
			</tr>
		  <?php
$_smarty_tpl->tpl_vars['subforum'] = $foreach_subforum_Sav;
}
?>
		</tbody>
	  </table>
	  <?php }?>
	  <table class="table table-bordered" style="table-layout:fixed;">
		<colgroup>
		  <col style="width:50%">
		  <col style="width:10%">
		  <col style="width:40%">
		</colgroup>
		<thead>
		  <tr>
			<th><?php echo $_smarty_tpl->tpl_vars['TOPIC']->value;?>
</th>
			<th><?php echo $_smarty_tpl->tpl_vars['STATS']->value;?>
</th>
			<th><?php echo $_smarty_tpl->tpl_vars['LAST_POST']->value;?>
</th>
		  </tr>
		</thead>
		<tbody>
	      <?php
$_from = $_smarty_tpl->tpl_vars['STICKIES']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['topic'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['topic']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['topic']->value) {
$_smarty_tpl->tpl_vars['topic']->_loop = true;
$foreach_topic_Sav = $_smarty_tpl->tpl_vars['topic'];
?>
			<tr>
			  <td>
			    <i class="fa fa-thumb-tack"></i> <?php if ($_smarty_tpl->tpl_vars['topic']->value['locked'] == 1) {?><i class="fa fa-lock"></i> <?php }
echo $_smarty_tpl->tpl_vars['topic']->value['label'];?>
 <a href="/forum/view_topic/?tid=<?php echo $_smarty_tpl->tpl_vars['topic']->value['topic_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['topic']->value['topic_title'];?>
</a>
				<br />
				<?php echo $_smarty_tpl->tpl_vars['BY']->value;?>
 <a href="/profile/<?php echo $_smarty_tpl->tpl_vars['topic']->value['topic_poster_mcname'];?>
"><?php echo $_smarty_tpl->tpl_vars['topic']->value['topic_poster'];?>
</a> | <span rel="tooltip" data-trigger="hover" data-original-title="<?php echo $_smarty_tpl->tpl_vars['topic']->value['topic_created'];?>
"><?php echo $_smarty_tpl->tpl_vars['topic']->value['topic_created_rough'];?>
</span>
			  </td>
			  <td>
			    <strong><?php echo $_smarty_tpl->tpl_vars['topic']->value['views'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['VIEWS']->value;?>
<br />
				<strong><?php echo $_smarty_tpl->tpl_vars['topic']->value['posts'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['POSTS']->value;?>
<br />
			  </td>
			  <td>
				<div class="row">
				  <div class="col-md-2">
					<div class="frame">
					  <a href="/profile/<?php echo $_smarty_tpl->tpl_vars['topic']->value['last_reply_mcname'];?>
"><?php echo $_smarty_tpl->tpl_vars['topic']->value['last_reply_avatar'];?>
</a>
					</div>
				  </div>
				  <div class="col-md-9">
					<a href="/profile/<?php echo $_smarty_tpl->tpl_vars['topic']->value['last_reply_mcname'];?>
"><?php echo $_smarty_tpl->tpl_vars['topic']->value['last_reply_username'];?>
</a><br />
					<span rel="tooltip" data-trigger="hover" data-original-title="<?php echo $_smarty_tpl->tpl_vars['topic']->value['last_post_created'];?>
"><?php echo $_smarty_tpl->tpl_vars['topic']->value['last_post_rough'];?>
</span>
				  </div>
				</div>
			  </td>
			</tr>
		  <?php
$_smarty_tpl->tpl_vars['topic'] = $foreach_topic_Sav;
}
?>
	      <?php
$_from = $_smarty_tpl->tpl_vars['TOPICS']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['topic'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['topic']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['topic']->value) {
$_smarty_tpl->tpl_vars['topic']->_loop = true;
$foreach_topic_Sav = $_smarty_tpl->tpl_vars['topic'];
?>
			<tr>
			  <td>
			    <?php if ($_smarty_tpl->tpl_vars['topic']->value['locked'] == 1) {?><i class="fa fa-lock"></i> <?php }
echo $_smarty_tpl->tpl_vars['topic']->value['label'];?>
 <a href="/forum/view_topic/?tid=<?php echo $_smarty_tpl->tpl_vars['topic']->value['topic_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['topic']->value['topic_title'];?>
</a>
				<br />
				<?php echo $_smarty_tpl->tpl_vars['BY']->value;?>
 <a href="/profile/<?php echo $_smarty_tpl->tpl_vars['topic']->value['topic_poster_mcname'];?>
"><?php echo $_smarty_tpl->tpl_vars['topic']->value['topic_poster'];?>
</a> | <span rel="tooltip" data-trigger="hover" data-original-title="<?php echo $_smarty_tpl->tpl_vars['topic']->value['topic_created'];?>
"><?php echo $_smarty_tpl->tpl_vars['topic']->value['topic_created_rough'];?>
</span>
			  </td>
			  <td>
			    <strong><?php echo $_smarty_tpl->tpl_vars['topic']->value['views'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['VIEWS']->value;?>
<br />
				<strong><?php echo $_smarty_tpl->tpl_vars['topic']->value['posts'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['POSTS']->value;?>
<br />
			  </td>
			  <td>
				<div class="row">
				  <div class="col-md-2">
					<div class="frame">
					  <a href="/profile/<?php echo $_smarty_tpl->tpl_vars['topic']->value['last_reply_mcname'];?>
"><?php echo $_smarty_tpl->tpl_vars['topic']->value['last_reply_avatar'];?>
</a>
					</div>
				  </div>
				  <div class="col-md-9">
					<a href="/profile/<?php echo $_smarty_tpl->tpl_vars['topic']->value['last_reply_mcname'];?>
"><?php echo $_smarty_tpl->tpl_vars['topic']->value['last_reply_username'];?>
</a><br />
					<span rel="tooltip" data-trigger="hover" data-original-title="<?php echo $_smarty_tpl->tpl_vars['topic']->value['last_post_created'];?>
"><?php echo $_smarty_tpl->tpl_vars['topic']->value['last_post_rough'];?>
</span>
				  </div>
				</div>
			  </td>
			</tr>
		  <?php
$_smarty_tpl->tpl_vars['topic'] = $foreach_topic_Sav;
}
?>
		</tbody>
	  </table>
	  <?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

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