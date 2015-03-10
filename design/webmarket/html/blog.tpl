{* Список записей блога *}

{* Канонический адрес страницы *}
{$canonical="/blog" scope=parent}

<div class="darker-stripe">
	<div class="container">
		<div class="row">
			<div class="span12">
				<ul class="breadcrumb">
					<li>
						<a href="./">Главная</a>
					</li>
					<li><span class="icon-chevron-right"></span></li>
					<li>
						Блог
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="push-up top-equal blocks-spacer">
		<div class="row">
			<div class="span12">
				<div class="title-area">
					<h1 class="inline"><span class="light">Webmarket</span> Блог</h1>
				</div>
			</div>
			
			<section class="span8 blog">
				{foreach $posts as $post}
				<article class="post format-standard sticky">
					<div class="post-inner">
						<div class="post-title">
							<h2><a href="blog/{$post->url}" data-post="{$post->id}">{$post->name|regex_replace:"/^(.+?\s)/":"<span class='light'>$1</span>"}</a></h2>
							<div class="metadata">
								{$post->date|date}
							</div>
						</div>
						
						<p class="push-down-25">
							{$post->annotation}
						</p>
						<a href="blog/{$post->url}" class="btn btn-primary bold higher">Продолжить чтение</a>
					</div>
				</article>
				{/foreach}			

				<hr />
				
				{include file='pagination.tpl'}
			</section>

			<aside class="span4 right-sidebar">
				<!--  = Flickr Widget =  -->
				<div class="sidebar-item widget_flickr">
					<div class="underlined">
						<h3><span class="light">Flickr</span> Widget</h3>
					</div>
					
					<div class="flickr-badge clearfix">
						<div id="flickr_badge_uber_wrapper">
							<div id="flickr_badge_wrapper">
								<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&display=latest&size=s&layout=x&source=group&group=80641914@N00"></script>
							</div>
						</div>
					</div>
				</div>
				
				<!--  = Twitter Widget =  -->
				<div class="sidebar-item widget_twitter">
					<div class="underlined">
						<h3><span class="light">Twitter</span> Feed</h3>
					</div>
					
					<a class="twitter-timeline"  href="https://twitter.com/primozcigler"  data-widget-id="361435057526800385">Tweets by @primozcigler</a>
					{literal}
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					{/literal}
				</div>
			</aside>
		</div>
	</div>
</div>