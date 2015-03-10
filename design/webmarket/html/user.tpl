{* Шаблон страницы зарегистрированного пользователя *}

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
						Личный кабинет
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>  

<div class="container">
	<div class="push-up blocks-spacer">
		<div class="row">
			<section class="span6">
				<div class="underlined push-down-20">
					<h3>{$user->name|regex_replace:"/^(.+?\s)/":"<span class='light'>$1</span>"}</h3>
				</div>
				
				{if $error}
				<div class="alert alert-danger in fade push-down-25">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{if $error == 'empty_name'}Введите имя
					{elseif $error == 'empty_email'}Введите email
					{elseif $error == 'empty_password'}Введите пароль
					{elseif $error == 'user_exists'}Пользователь с таким email уже зарегистрирован
					{else}{$error}{/if}
				</div>
				{/if}

				<form class="tab-content" method="post">
					<div class="control-group">
						<label class="control-label" for="name">Имя</label>
						<div class="controls">
							<input type="text" name="name" id="name" value="{$name|escape}" class="span4" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label" for="email">Email</label>
						<div class="controls">
							<input type="email" name="email" id="email" value="{$email|escape}" class="span4" required>
						</div>
					</div>
					
					<div class="control-group">
						<label></label>
						<label class="control-label" for="password"><a href='#' onclick="$('#password').show();return false;">Изменить пароль</a></label>
						<div class="controls">
							<input type="password" name="password" id="password" class="span4" style="display:none">
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<input type="submit" class="btn btn-primary higher bold" name="login" value="Сохранить">
						</div>
					</div>
				</form>
			</section>
			
			<section class="span6">
				<div class="underlined push-down-20">
					<h3><span class="light">Ваши</span> заказы</h3>
				</div>
				
				{if $orders}
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Дата заказа</th>
							<th>Номер заказа</th>
							<th>Статус</th>
						</tr>
					</thead>
					<tbody>
					{foreach name=orders item=order from=$orders}  
						<tr>
							<td>{$order->date|date}</td>
							<td><a href='order/{$order->url}'>Заказ №{$order->id}</a></td>
							<td>
								{if $order->paid == 1}оплачен,{/if} 
								{if $order->status == 0}ждет обработки{elseif $order->status == 1}в обработке{elseif $order->status == 2}выполнен{/if}
							</td>
						</tr>
					{/foreach}
					</tbody>
				</table>
				{else}
				У вас еще нет заказов
				{/if}
			</section>
		</div>
	</div>
</div>