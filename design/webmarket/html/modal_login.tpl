<div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="loginModalLabel"><span class="light">Вход</span> в личный кабинет</h3>
	</div>
	
	<div class="modal-body">
		<form method="post" id="loginForm">
			<div class="control-group">
				<label class="control-label hidden shown-ie8" for="inputEmail">Email</label>
				<div class="controls">
					<input type="text" name="email" class="input-block-level" id="inputEmail" placeholder="Email" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label hidden shown-ie8" for="inputPassword">Пароль</label>
				<div class="controls">
					<input type="password" name="password" class="input-block-level" id="inputPassword" placeholder="Пароль" required>
				</div>
			</div>
			<button type="submit" class="btn btn-primary input-block-level bold higher push-down-20">
				Войти
			</button>
			<div id="loginResult"></div>
		</form>
		
		<p class="center-align push-down-0">
			<a data-toggle="modal" role="button" href="#forgotPassModal" data-dismiss="modal">Забыли пароль?</a>
		</p>
	</div>
</div>