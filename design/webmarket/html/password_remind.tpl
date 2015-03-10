{* Письмо пользователю для восстановления пароля *}

{* Канонический адрес страницы *}
{$canonical="/user/password_remind" scope=parent}

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
						Напоминание пароля
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
					<h3><span class="light">Напоминание</span> пароля</h3>
				</div>
		
				{if $email_sent}
				<div class="alert alert-success in fade">
                    На <strong>{$email|escape}</strong> отправлено письмо для восстановления пароля.
                </div>
				{else}
				
				{if $error}
				<div class="alert alert-danger in fade push-down-25">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{if $error == 'user_not_found'}Пользователь не найден{else}{$error}{/if}
				</div>
				{/if}

				<form class="tab-content" method="post">
					<div class="control-group">
						<label class="control-label" for="email">Введите email, который вы указывали при регистрации<span class="red-clr bold">*</span></label>
						<div class="controls">
							<input type="email" name="email" id="email" value="{$email|escape}" class="span4" required>
						</div>
					</div>
					
					<div class="control-group">
						<div class="controls">
							<input type="submit" class="btn btn-primary higher bold" value="Вспомнить">
						</div>
					</div>
				</form>
				{/if}
			</section>
		</div>
	</div>
</div>