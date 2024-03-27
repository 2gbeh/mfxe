<?PHP
$tb = 'credit';

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$post = sanitize_request($_POST);
	
	$post['bal'] = Main::credit($post);
	
	$db_res = sql_insert($db_con, $tb, $post);
		
	if (is_numeric($db_res))
	{		
		$_POST = NULL;
		
		$error = 'Record saved successfully';
		$errno = 200;
	}
	else
	{
		$error = $db_res;
		$errno = 400;		
	}
}

$enum_bios = Main::bios($db_con);
$ddl_user_id = Enums::option($enum_bios, $_POST['user_id']);
?>