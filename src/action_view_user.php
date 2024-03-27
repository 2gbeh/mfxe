<?PHP
$tb = 'user'; 
$dir = 'uploads/passport/';
$dir_2 = 'uploads/valid_id/';

if ($_GET['e'] == true) {
	goto_page('edit_user.php?e=true&q=' . $_GET['q']);
}

if ($_GET['d'] == true) {
	goto_page('view_users.php?d=true&q=' . $_GET['q']);
}

if ($_GET['v'] == true)
{
	$row = '';
	$db_res = sql_select_id($db_con, $tb, $_GET['q']);
	if ($db_res) {
		$row = $db_res;
		if (substr($row['passport'],0,3) != 'IMG')
			$row['passport'] = 'default_dark.png';  
	} 
	else {
		$error = 'Select acccount does not exist';
		$errno = 400;	
	}		
	
}

?>