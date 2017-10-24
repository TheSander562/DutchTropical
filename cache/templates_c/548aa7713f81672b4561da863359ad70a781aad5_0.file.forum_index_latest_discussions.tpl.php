<?php /* Smarty version 3.1.24, created on 2017-03-27 15:58:23
         compiled from "/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Default/forum_index_latest_discussions.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4304624658d9288f5663d1_48142540%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '548aa7713f81672b4561da863359ad70a781aad5' => 
    array (
      0 => '/home/dutchtro/domains/dutchtropicalmt.nl/public_html/forum/styles/templates/Default/forum_index_latest_discussions.tpl',
      1 => 1490626276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4304624658d9288f5663d1_48142540',
  'variables' => 
  array (
    'BREADCRUMBS' => 0,
    'DISCUSSION' => 0,
    'STATS' => 0,
    'LAST_REPLY' => 0,
    'LATEST_DISCUSSIONS' => 0,
    'discussion' => 0,
    'BY' => 0,
    'IN' => 0,
    'VIEWS' => 0,
    'POSTS' => 0,
    'SEARCH_FORM' => 0,
    'FORUMS' => 0,
    'OVERVIEW' => 0,
    'LATEST_DISCUSSIONS_TITLE' => 0,
    'SIDEBAR_FORUMS' => 0,
    'subforums' => 0,
    'category' => 0,
    'subforum' => 0,
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
    'STATISTICS' => 0,
    'USERS_REGISTERED' => 0,
    'LATEST_MEMBER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58d9288f6d35b3_70570201',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d9288f6d35b3_70570201')) {
function content_58d9288f6d35b3_70570201 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4304624658d9288f5663d1_48142540';
?>
<div class="container">
  <div class="row">
    <div class="col-md-9">
	  <?php echo $_smarty_tpl->tpl_vars['BREADCRUMBS']->value;?>

	  <table class="table table-striped">
		<tr>
		  <th><?php echo $_smarty_tpl->tpl_vars['DISCUSSION']->value;?>
</th>
		  <th><?php echo $_smarty_tpl->tpl_vars['STATS']->value;?>
</th>
		  <th><?php echo $_smarty_tpl->tpl_vars['LAST_REPLY']->value;?>
</th>
		</tr>
	    <?php
$_from = $_smarty_tpl->tpl_vars['LATEST_DISCUSSIONS']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['discussion'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['discussion']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['discussion']->value) {
$_smarty_tpl->tpl_vars['discussion']->_loop = true;
$foreach_discussion_Sav = $_smarty_tpl->tpl_vars['discussion'];
?>
	    <tr>
		  <td>
		    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['locked'] == 1) {?><i class="fa fa-lock"></i> <?php }
echo $_smarty_tpl->tpl_vars['discussion']->value['label'];?>
 <a href="/forum/view_topic/?tid=<?php echo $_smarty_tpl->tpl_vars['discussion']->value['topic_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['discussion']->value['topic_title'];?>
</a><br />
			<small><span rel="tooltip" data-trigger="hover" data-original-title="<?php echo $_smarty_tpl->tpl_vars['discussion']->value['topic_created'];?>
"><?php echo $_smarty_tpl->tpl_vars['discussion']->value['topic_created_rough'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['BY']->value;?>
 <a href="/profile/<?php echo $_smarty_tpl->tpl_vars['discussion']->value['topic_created_mcname'];?>
"><?php echo $_smarty_tpl->tpl_vars['discussion']->value['topic_created_username'];?>
</a> <?php echo $_smarty_tpl->tpl_vars['IN']->value;?>
 <a href="/forum/view_forum/?fid=<?php echo $_smarty_tpl->tpl_vars['discussion']->value['forum_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['discussion']->value['forum_name'];?>
</a></small>
		  </td>
		  <td>
		    <strong><?php echo $_smarty_tpl->tpl_vars['discussion']->value['views'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['VIEWS']->value;?>
<br />
			<strong><?php echo $_smarty_tpl->tpl_vars['discussion']->value['posts'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['POSTS']->value;?>

		  </td>
		  <td>
			<div class="row">
			  <div class="col-md-3">
				<div class="frame">
				  <a href="/profile/<?php echo $_smarty_tpl->tpl_vars['discussion']->value['last_reply_mcname'];?>
"><?php echo $_smarty_tpl->tpl_vars['discussion']->value['last_reply_avatar'];?>
</a>
				</div>
			  </div>
			  <div class="col-md-9">
				<span rel="tooltip" data-trigger="hover" data-original-title="<?php echo $_smarty_tpl->tpl_vars['discussion']->value['last_reply'];?>
"><?php echo $_smarty_tpl->tpl_vars['discussion']->value['last_reply_rough'];?>
</span><br /><?php echo $_smarty_tpl->tpl_vars['BY']->value;?>
 <a href="/profile/<?php echo $_smarty_tpl->tpl_vars['discussion']->value['last_reply_mcname'];?>
"><?php echo $_smarty_tpl->tpl_vars['discussion']->value['last_reply_username'];?>
</a>
			  </div>
			</div>
		  </td>
		</tr>
	    <?php
$_smarty_tpl->tpl_vars['discussion'] = $foreach_discussion_Sav;
}
?>
	  </table>
	</div>
	<div class="col-md-3">
	
	  <?php echo $_smarty_tpl->tpl_vars['SEARCH_FORM']->value;?>

	  
	  <br />
	  
	  <div class="well">
	    <h4><?php echo $_smarty_tpl->tpl_vars['FORUMS']->value;?>
</h4>
		<ul class="nav nav-list">
		  <li class="nav-header"><?php echo $_smarty_tpl->tpl_vars['OVERVIEW']->value;?>
</li>
		  <li class="active"><a href="/forum"><?php echo $_smarty_tpl->tpl_vars['LATEST_DISCUSSIONS_TITLE']->value;?>
</a></li>
		  <?php
$_from = $_smarty_tpl->tpl_vars['SIDEBAR_FORUMS']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['subforums'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['subforums']->_loop = false;
$_smarty_tpl->tpl_vars['category'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value => $_smarty_tpl->tpl_vars['subforums']->value) {
$_smarty_tpl->tpl_vars['subforums']->_loop = true;
$foreach_subforums_Sav = $_smarty_tpl->tpl_vars['subforums'];
?>
		    <?php if (!empty($_smarty_tpl->tpl_vars['subforums']->value)) {?>
			  <li class="nav-header"><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</li>
			  <?php
$_from = $_smarty_tpl->tpl_vars['subforums']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['subforum'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['subforum']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['subforum']->value) {
$_smarty_tpl->tpl_vars['subforum']->_loop = true;
$foreach_subforum_Sav = $_smarty_tpl->tpl_vars['subforum'];
?>
			    <li><a href="/forum/view_forum/?fid=<?php echo $_smarty_tpl->tpl_vars['subforum']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['subforum']->value['title'];?>
</a></li>
			  <?php
$_smarty_tpl->tpl_vars['subforum'] = $foreach_subforum_Sav;
}
?>
			<?php }?>
		  <?php
$_smarty_tpl->tpl_vars['subforums'] = $foreach_subforums_Sav;
}
?>
		</ul>
	  </div>
	  
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
	  
	  <div class="well">
	  <h4><?php echo $_smarty_tpl->tpl_vars['ONLINE_USERS']->value;?>
</h4>
	  <?php echo $_smarty_tpl->tpl_vars['ONLINE_USERS_LIST']->value;?>

	  </div>
	  
	  <div class="well">
	    <h4><?php echo $_smarty_tpl->tpl_vars['STATISTICS']->value;?>
</h4>
		<?php echo $_smarty_tpl->tpl_vars['USERS_REGISTERED']->value;?>
<br />
		<?php echo $_smarty_tpl->tpl_vars['LATEST_MEMBER']->value;?>

	  </div>
	  
	</div>
  </div>
</div><?php }
}
?>