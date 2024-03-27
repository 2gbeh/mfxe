<?PHP
$tb = 'credit'; 
$tb_2 = 'debit'; 

if ($_GET['e'] == true) {
	goto_page('edit_credit.php?e=true&q=' . $_GET['q']);
}

if ($_GET['d'] == true)
{		
	Main::del_credit($db_con, $_GET['q']);
	$db_res = sql_delete($db_con, $tb, 'ID', $_GET['q']);
	
	if ($db_res > 0) {		
		$error = 'Record deleted successfully';
		$errno = 200;
	} else {
		$error = 'Deleted record no longer exist';
		$errno = 300;
	}
}

$bios = Main::bios($db_con);
$size = sql_count($db_con, $tb);
$pager = new Pager($size, 15);
$sql_stmt = 'SELECT * FROM `'.$tb.'` ORDER BY id DESC '.$pager->clause;

$db_res = sql_query($db_con, $sql_stmt);

if (is_array($db_res))
{		
	$sn = $pager->off; $row = ''; $rows = '';	
	foreach ($db_res as $key => $value)
	{
		$sn += 1;
		
		$prt = Main::prt($value['p'], $value['r'], $value['t']);
		$mature = Main::mature($value['reg_date'], $value['t']);
		
		$row = '<tr>
			<td>'. $sn .'</td>
			<td nw>'. enum_f($bios, $value['user_id']) .'</td>
			<td>'. money_f($value['p']) .'</td>
			<td>'. $value['r'] .'%</td>
			<td ar>'. $value['t'] .'</td>
			<td>'. money_f($prt->emi) .'</td>
			<td>'. money_f($prt->a) .'</td>
			<td>'. money_f($value['bal']) .'</td>			
			<td nw>'. date_f($value['reg_date']) .'</td>
			<td nw>'. date_f($mature->m) .'</td>
			<td nw ar>
				<button class="btn btn-pri" onClick="onEdit('.$value['ID'].')" title="Edit">&#9998;</button>
				<button class="btn btn-sec" onClick="onDelete('.$value['ID'].')" title="Delete">&#10006;</button>
			</td>
		</tr>';

		$rows .= $row;
	}
}
?>