{* Страница входа пользователя *}

{* Канонический адрес страницы *}
{$canonical="/user/login" scope=parent}

{$meta_title = "Вход" scope=parent}
   
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
						Вход в личный кабинет
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>   

<div class="container">
	<div class="push-up blocks-spacer">
		<div class="row">
			<section class="span12">
				<div class="underlined push-down-20">
					<h3><span class="light">Вход</span> в личный кабинет</h3>
				</div>
		
				{if $error}
				<div class="alert alert-danger in fade push-down-25">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{if $error == 'login_incorrect'}Неверный логин или пароль
					{elseif $error == 'user_disabled'}Ваш аккаунт еще не активирован.
					{else}{$error}{/if}
				</div>
				{/if}

				<form class="tab-content" method="post">
					<div class="control-group">
						<label class="control-label" for="email">Email<span class="red-clr bold">*</span></label>
						<div class="controls">
							<input type="email" name="email" id="email" value="{$email|escape}" class="span4" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label" for="password">Пароль<span class="red-clr bold">*</span> (<a href="user/password_remind">напомнить</a>)</label>
						<div class="controls">
							<input type="password" name="password" id="password" class="span4" required>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<input type="submit" class="btn btn-primary higher bold" name="login" value="Войти">
						</div>
					</div>
				</form>
			</section>
		</div>
	</div>
</div>