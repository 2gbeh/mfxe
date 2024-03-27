<?PHP
$tb = 'user';
$dir = 'uploads/passport/';
$dir_2 = 'uploads/valid_id/';

//var_dump($_POST, $_FILES);
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	if (strlen($_FILES['passport']['name']) > 4)
		$_POST['passport'] = upload_file($_FILES['passport'], $dir);	
		
	if (strlen($_FILES['valid_id_file']['name']) > 4)
		$_POST['valid_id_file'] = upload_file($_FILES['valid_id_file'], $dir_2);			
	
	$post = sanitize_request($_POST);
	
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