<?PHP
# total investor
$tb = 'user';
$tot_user = sql_count($db_con, $tb);
$user_this_month = sql_fetch_by_month($db_con, $tb, 'reg_date');
$tot_user_this_month = count($user_this_month);
$perc_user_this_month = ($tot_user_this_month * 100) / $tot_user;
$rate_user_this_month = round($perc_user_this_month);

# total investment
$tb = 'credit';
$tot_inv = sql_count($db_con, $tb);
$inv_this_month = sql_fetch_by_month($db_con, $tb, 'reg_date');
$tot_inv_this_month = count($inv_this_month);
$perc_inv_this_month = ($tot_inv_this_month * 100) / $tot_inv;
$rate_inv_this_month = round($perc_inv_this_month);

# total deposit
$tb = 'credit';
$row_cr = sql_select_all($db_con, $tb);
$sum_cr = $sum_cr_this_month = 0;
foreach ($row_cr as $assoc) {
	if (substr($assoc['reg_date'],0,7) == date('Y-m'))
		$sum_cr_this_month += $assoc['p'];
	$sum_cr += $assoc['p'];
}
$sum_cr_buf = '&#8358; ' . number_format($sum_cr);
$sum_cr_this_month_buf = '&#8358; ' . number_format($sum_cr_this_month);
$perc_cr_this_month = ($sum_cr_this_month * 100) / $sum_cr;
$rate_cr_this_month = round($perc_cr_this_month);
	
# total payout
$tb = 'debit';
$row_dr = sql_select_all($db_con, $tb);
$sum_dr = $sum_dr_this_month = 0;
foreach ($row_dr as $assoc) {
	if (substr($assoc['reg_date'],0,7) == date('Y-m'))
		$sum_dr_this_month += $assoc['amt'];
	$sum_dr += $assoc['amt'];	
}
$sum_dr_buf = '&#8358; ' . number_format($sum_dr);
$sum_dr_this_month_buf = '&#8358; ' . number_format($sum_dr_this_month);
$perc_dr_this_month = ($sum_dr_this_month * 100) / $sum_dr;
$rate_dr_this_month = round($perc_dr_this_month);

# balance
$bal = $sum_cr - $sum_dr;
$bal_this_month = $sum_cr_this_month - $sum_dr_this_month;
$bal_this_month_buf = '&#8358; ' . number_format($bal_this_month);


# pending payout this momnth
$row = Main::payouts($db_con);
//var_dump($row);

$size = count($row);
$pager = new Pager($size, 15);

$db_res = $pager->crop($row);

if (is_array($db_res))
{		
	$sn = $pager->off; $row = ''; $rows = '';	
	foreach ($db_res as $key => $value)
	{
		$sn += 1;
		
		$bio = Main::bio($db_con, $value['id']);
		$req = '\'add_debit.php?pay=true&q=' .$value['id']. '&emi='.$value['emi'].'\'';
		$fin = $value['fin'] == true? '<x style="color:red; cursor:pointer;" title="Final Payment">*</x>': '';
				
		$row = '<tr>
			<td>'. $sn .'</td>
			<td nw>'. $bio .'</td>
			<td>'. enum_f(Lists::BANK, $value['bank']) .'</td>
			<td>'. strtoupper($value['acct_name']) .'</td>
			<td>'. $value['acct_no'] .'</td>
			<td>'. $fin.' '. money_f($value['emi']) .'</td>
			<td nw>'. date_f($value['due']) .'</td>
			<td nw ar>
				<button class="btn btn-ter" onClick="redirect('.$req.')">Pay</button>
			</td>
		</tr>';

		$rows .= $row;
	}
}

?>