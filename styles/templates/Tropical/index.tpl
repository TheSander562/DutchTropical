<section id="wrapper">
   <div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="header_wrapper">
         <p>{$PLAYERS_ONLINE}</p>
         <p>{$CONNECT_WITH}</p>
      </div>
        </div>
    </div>
</div>
</section>
<section id="index">
<div class="container">
  <div class="row">
    {if !empty($TWITTER_FEED) || !empty($VOICE_VIEWER)}
    <div class="col-md-9">
	{else}
	<div class="col-md-8 col-md-offset-2">
	{/if}
	  <!-- News -->
	  <h2>{$NEWS}</h2>
        <hr>
	  {foreach from=$newsArray item=news}
	    <div class="panel panel-primary">
		  <div class="panel-heading">
		    <a class="white-text" href="/forum/view_topic/?tid={$news.id}">{$news.title}</a>
              <br>
              <span class="label label-info"><a href="#">{$news.date}</a></span>
		  </div>
		  <div class="panel-body">
		    {$news.content}
			<br /><br />
			  <span class="label label-danger"><span class="glyphicon glyphicon-comment"></span> {$news.replies} | <span class="glyphicon glyphicon-eye-open"></span> {$news.views}</span>
			<span class="pull-right"><a class="white-text" href="/profile/{$news.author_mcname}">{$news.author_username}</a> {$news.author_avatar}</span>
		  </div>
		</div>
	  {/foreach}
	</div>
	{if !empty($TWITTER_FEED) || !empty($VOICE_VIEWER)}
	<div class="col-md-3">
	  <!-- Social -->
	  <h2>{$SOCIAL}</h2>
        <hr>
        
    <div class="header_wrapper">
	  {if !empty($TWITTER_FEED)}
	  {$TWITTER_FEED}
	  {/if}
        </div>
	  {if !empty($VOICE_VIEWER)}
	  {if {$VOICE_VIEWER_TITLE} != 'Discord'}
	  <div class="well well-sm">
	  <h4>{$VOICE_VIEWER_TITLE}</h4>
	  <strong>{$VOICE_VIEWER_IP}</strong><br />
	  {$VOICE_VIEWER}
	  </div>
	  {else}
	  {$VOICE_VIEWER}
	  {/if}
	  {/if}
	</div>
	{/if}
  </div>
</div>
</section>