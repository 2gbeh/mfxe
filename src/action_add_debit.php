<?PHP
$tb = 'debit';

if ($_GET['pay'] == true) {
	$_POST['reg_date'] = date('Y-m-d');
	$_POST['user_id'] = $_GET['q'];
	$_POST['amt'] = $_GET['emi'];
	$_POST['mo'] = date('m');
	$_POST['yr'] = date('Y');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{	
	$post = sanitize_request($_POST);
	
	$post['bal'] = Main::debit($db_con, $post);

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

$ddl_month = Enums::option(Lists::MONTH, $_POST['mo']);
?>