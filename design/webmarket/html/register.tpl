{* Страница регистрации *}

{* Канонический адрес страницы *}
{$canonical="/user/register" scope=parent}

{$meta_title = "Регистрация" scope=parent}

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
						Регистрация
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
					<h3><span class="light">Регистрация</span></h3>
				</div>
		
				{if $error}
				<div class="alert alert-danger in fade push-down-25">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{if $error == 'empty_name'}Введите имя
					{elseif $error == 'empty_email'}Введите email
					{elseif $error == 'empty_password'}Введите пароль
					{elseif $error == 'user_exists'}Пользователь с таким email уже зарегистрирован
					{elseif $error == 'captcha'}Неверно введена капча
					{else}{$error}{/if}
				</div>
				{/if}

				<form class="tab-content" method="post">
					<div class="row">
					<section class="span4">
						<div class="control-group">
							<label class="control-label" for="name">Имя<span class="red-clr bold">*</span></label>
							<div class="controls">
								<input type="text" name="name" id="name" value="{$name|escape}" class="span100" required>
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label" for="email">Email<span class="red-clr bold">*</span></label>
							<div class="controls">
								<input type="email" name="email" id="email" value="{$email|escape}" class="span100" required>
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label" for="password">Пароль<span class="red-clr bold">*</span></label>
							<div class="controls">
								<input type="password" name="password" id="password" class="span100" required>
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label" for="captcha_code">Число<span class="red-clr bold">*</span></label>
							<div class="controls captcha">
								<input type="text" name="captcha_code" id="captcha_code" class="span100" required>
								<img src="captcha/image.php?{math equation='rand(10,10000)'}"/>
							</div>
						</div>
						
						<div class="control-group">
							<div class="controls">
								<input type="submit" class="btn btn-primary higher bold" name="register" value="Зарегистрироваться">
							</div>
						</div>
						</section>
					</div>
				</form>
			</section>
		</div>
	</div>
</div>