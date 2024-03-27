<?PHP
$tb = 'user';
$dir = 'uploads/passport/';
$dir_2 = 'uploads/valid_id/';

if ($_GET['e'] == true) {	
	$_POST = sql_select_id($db_con, $tb, $_GET['q']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$k = 'passport';
	if (strlen($_FILES[$k]['name']) > 4) 
	{
		$row = sql_select_id($db_con, $tb, $_POST['ID']);
		$_POST[$k] = replace_file($row[$k], $_FILES[$k], $dir);
	}
	
	$k = 'valid_id_file'; 	
	if (strlen($_FILES[$k]['name']) > 4) 
	{
		$row = sql_select_id($db_con, $tb, $_POST['ID']);		
		$_POST[$k] = replace_file($row[$k], $_FILES[$k], $dir_2);
	}
	
	$post = sanitize_request($_POST);

	$db_res = sql_update($db_con, $tb, $post, 'ID', $_POST['ID']);
	
	//var_dump($_POST,$_FILES,$post,$db_res);
		
	if (is_numeric($db_res)) 
	{
		//Main::keylog($db_con,3);
		
		//$_POST = NULL;
		$error = 'Record updated successfully';
		$errno = 200;
	}
	else
	{
		$error = $db_res;
		$errno = 400;		
	}
}

$ddl_gender = Enums::option(Lists::GENDER, $_POST['gender']);

$ddl_country = Enums::option(Lists::COUNTRY, $_POST['country']);

$ddl_religion = Enums::option(Lists::RELIGION, $_POST['religion']);

$enum_occupation = sql_column($db_con, $tb, 'occupation');
$hint_occupation = Enums::datalist($enum_occupation, 'hint_occupation');

$ddl_state = Enums::option(Lists::STATE, $_POST['state']);

$ddl_bank = Enums::option(Lists::BANK, $_POST['bank']);

$ddl_bank_alt = Enums::option(Lists::BANK, $_POST['bank_alt']);

$ddl_valid_id = Enums::option(Lists::VALID_ID, $_POST['valid_id']);

$enum_referral = sql_column($db_con, $tb, 'referral');
$hint_referral = Enums::datalist($enum_referral, 'hint_referral');


?>