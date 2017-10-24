<?php 
/*
 *	Made by Samerton
 *  http://worldscapemc.co.uk
 *
 *  License: MIT
 */
 
/*
 *  Create code for page footer
 */

// Ensure the social media icons variable is set
if(!isset($social_media_icons)){
	$social_media_icons = '';
}

// Generate code for footer navigation
$footer_nav = '
<ul>';

if(isset($page_loading) && $page_loading == '1'){
	$footer_nav .= '
    <li><a data-toggle="tooltip" id="page_load_tooltip" title="Page loading.."><i class="fa fa-tachometer fa-fw"></i></a></li>';
}

if(isset($footer_nav_array)){
	foreach($footer_nav_array as $key => $item){
		$footer_nav .= '<li><a href="/' . $key . '">' . $item . '</a></li>';
	}
}

// Custom pages
$custom_pages = $queries->getWhere('custom_pages', array('url', '<>', ''));
foreach($custom_pages as $item){
	if($item->link_location == 3){
		$footer_nav .= '<li><a href="' . htmlspecialchars($item->url) . '">' . htmlspecialchars($item->title) . '</a></li>';
	}
}

$footer_nav .= '<a class="dropdown-toggle" data-toggle="dropdown" href="#">&copy; ' . htmlspecialchars($sitename) . ' ' . date('Y') . '</a>';

$footer_nav .= '</ul>';

$smarty->assign('SOCIAL_MEDIA_ICONS', $social_media_icons);
$smarty->assign('FOOTER_NAVIGATION', $footer_nav);
