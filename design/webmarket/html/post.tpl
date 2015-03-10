{* Страница отдельной записи блога *}

{* Канонический адрес страницы *}
{$canonical="/blog/{$post->url}" scope=parent}

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
						<a href="/blog">Блог</a>
					</li>
					<li><span class="icon-chevron-right"></span></li>
					<li>
						{$post->name|escape}
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
			
			<section class="span8 single single-post">
				<article class="post ">
					<div class="post-inner">
						<div class="post-title">
							<h2 data-post="{$post->id}">{$post->name|regex_replace:"/^(.+?\s)/":"<span class='light'>$1</span>"}</h2>

							<div class="metadata">
								{$post->date|date} {$comments|count}
							</div>
						</div>

						{$post->text}
					</div>
				</article>
				
				<hr />

				<section id="comments" class="comments-container">
					{if $comments}
						{foreach $comments as $comment}
						<div class="single-comment clearfix">
							<div class="avatar-container">
								<img src="design/{$settings->theme}/images/avatar_dummy.gif" alt="avatar" class="avatar"  />
							</div>
							<div class="comment-content">
								<div class="comment-inner">
									<cite class="author-name">
										<span class="light">{$comment->name|escape}</span>{if !$comment->approved}, ожидает модерации{/if}
									</cite>
									<div class="metadata">
										{$comment->date|date}, {$comment->date|time}
									</div>
									<div class="comment-text">
										{$comment->text|escape|nl2br}
									</div>
								</div>
							</div>
						</div>
						{/foreach}
					{/if}
					
					<h3 class="push-down-25"><span class="light">Написать</span> комментарий</h3>

					<form id="commentform" method="post" class="form form-inline form-comments">
						{if $error}
							<div class="alert alert-danger in fade">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								{if $error=='captcha'}
								Неверно введена капча
								{elseif $error=='empty_name'}
								Введите имя
								{elseif $error=='empty_comment'}
								Введите комментарий
								{/if}
							</div>
						{/if}

						<p class="push-down-20">
							<input type="text" aria-required="true" tabindex="1" size="30" id="comment_name" name="name" value="{$comment_name}" required/>
							<label for="comment_name">Имя<span class="red-clr bold">*</span></label>
						</p>

						<p class="push-down-20" style="position: relative">
							<img src="captcha/image.php?{math equation='rand(10,10000)'}" alt='captcha' style="position: absolute; max-height: 33px; top: 2px; left: 161px; border-radius: 3px"/>
							<input type="text" aria-required="true" tabindex="2" size="30" id="comment_captcha" name="captcha_code" value="" required/>
							<label for="captcha_code">Число<span class="red-clr bold">*</span></label>
						</p>

						<p class="push-down-20">
							<textarea class="input-block-level" tabindex="3" rows="7" cols="70" id="comment" name="text" placeholder="Your Comment goes here ..." required>{$comment_text}</textarea>
						</p>

						<p>
							<input class="btn btn-primary bold" type="submit" tabindex="4" name="comment" id="submit" value="Отправить" />
						</p>
					</form>
				 </section>
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