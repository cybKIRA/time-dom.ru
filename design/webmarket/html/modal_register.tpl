<div id="registerModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="registerModalLabel"><span class="light">Регистрация</span> на Webmarket'е</h3>
	</div>
	
	<div class="modal-body">
		<form method="post" id="registerForm">
			<div class="control-group">
				<label class="control-label hidden shown-ie8" for="inputUsernameRegister">Имя</label>
				<div class="controls">
					<input type="text" name="name" class="input-block-level" id="inputUsernameRegister" placeholder="Имя" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label hidden shown-ie8" for="inputEmailRegister">Email</label>
				<div class="controls">
					<input type="email" name="email" class="input-block-level" id="inputEmailRegister" placeholder="Email" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label hidden shown-ie8" for="inputPasswordRegister">Пароль</label>
				<div class="controls">
					<input type="password" name="password" class="input-block-level" id="inputPasswordRegister" placeholder="Пароль" required>
				</div>
			</div>

			<button type="submit" class="btn btn-danger input-block-level bold higher push-down-20">
				Зарегистрироваться
			</button>
			
			<div id="registerResult"></div>
		</form>
		<p class="center-align push-down-0">
			<a data-toggle="modal" role="button" href="#loginModal" data-dismiss="modal">Уже зарегистрированы?</a>
		</p>
	</div>
</div>