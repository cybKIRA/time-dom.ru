<?php
	session_start();
	chdir('..');
	require_once('api/Simpla.php');
	$simpla = new Simpla();

	$email = $_POST["email"];
	$simpla->design->assign('email', $email);
	
	// Выбираем пользователя из базы
	$user = $simpla->users->get_user($email);
	if(!empty($user))
	{
		// Генерируем секретный код и сохраняем в сессии
		$code = md5(uniqid($simpla->config->salt, true));
		$_SESSION['password_remind_code'] = $code;
		$_SESSION['password_remind_user_id'] = $user->id;
		
		// Отправляем письмо пользователю для восстановления пароля
		$simpla->notify->email_password_remind($user->id, $code);
		$simpla->design->assign('email_sent', true);
		
		$result = 'На ' . $email . ' отправлено письмо для восстановления пароля';
	}
	else
	{
		$result = 'user_not_found';	
	}
	
	header("Content-type: application/json; charset=UTF-8");
	header("Cache-Control: must-revalidate");
	header("Pragma: no-cache");
	header("Expires: -1");
	print json_encode($result);