<?PHP
$tb = 'debit';

if ($_GET['e'] == true) {	
	$_POST = sql_select_id($db_con, $tb, $_GET['q']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$post = sanitize_request($_POST);
	
	$post['bal'] = Main::debit($db_con, $post);

	$db_res = sql_update($db_con, $tb, $post, 'ID', $_POST['ID']);
		
	if (is_numeric($db_res)) 
	{
		$error = 'Record updated successfully';
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