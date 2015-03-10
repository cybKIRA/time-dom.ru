<div id="forgotPassModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="forgotPassModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="forgotPassModalLabel"><span class="light">Забыли</span> пароль?</h3>
	</div>
	
	<div class="modal-body">
		<form method="post" id="remindForm">
			<div class="control-group">
				<label class="control-label hidden shown-ie8" for="inputEmailRegister">Email</label>
				<div class="controls">
					<input type="email" name="email" class="input-block-level" id="inputEmailRegister" placeholder="Email" required>
				</div>
			</div>
			
			<button type="submit" class="btn btn-primary input-block-level bold higher push-down-20">
				Выслать пароль
			</button>
			
			<div id="remindResult"></div>
		</form>
	</div>
</div>