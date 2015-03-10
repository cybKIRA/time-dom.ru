{* Шаблон текстовой страницы *}

{* Канонический адрес страницы *}
{$canonical="/{$page->url}" scope=parent}

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
						{$page->header|escape}
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="push-up top-equal blocks-spacer">
		<div class="row">
			{if $page->url != '404'}
			<div class="span12">
				<div class="title-area">
					<h1 class="inline" data-page="{$page->id}">{$page->header|regex_replace:"/^(.+?\s)/":"<span class='light'>$1</span>"}</h1>
				</div>
			</div>
			{/if}
			<section class="span12">
				{$page->body}
			</section>
		</div>
	</div>
</div>