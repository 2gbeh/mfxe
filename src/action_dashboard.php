<?PHP
# total investor
$tb = 'user';
$tot_user = sql_count($db_con, $tb);
$user_this_month = sql_fetch_by_month($db_con, $tb, 'reg_date');
$tot_user_this_month = count($user_this_month);
$perc_user_this_month = ($tot_user_this_month * 100) / $tot_user;
$rate_user_this_month = round($perc_user_this_month);

# gender stats
$x = sql_select_count($db_con, $tb, 'gender', 'M');
$ring_rate_m = round(($x * 100) / $tot_user);

$x = sql_select_count($db_con, $tb, 'gender', 'F');
$ring_rate_f = round(($x * 100) / $tot_user);

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
$sum_cr_buf = '' . number_format($sum_cr);
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
$sum_dr_buf = '' . number_format($sum_dr);
$sum_dr_this_month_buf = '&#8358; ' . number_format($sum_dr_this_month);
$perc_dr_this_month = ($sum_dr_this_month * 100) / $sum_dr;
$rate_dr_this_month = round($perc_dr_this_month);

# balance
$bal = $sum_cr - $sum_dr;
$bal_this_month = $sum_cr_this_month - $sum_dr_this_month;
$bal_this_month_buf = '&#8358; ' . number_format($bal_this_month);

# monthly stats
$tb = 'credit';
$months = Lists::MONTH_SHORT;
$mm = 0; $yr = date('Y');
$col_labels_cr = $col_values_cr = array();
foreach ($months as $value) 
{
	$mm += 1;
	$sql_stmt = 'SELECT SUM(p) AS var FROM `'.$tb.'` WHERE MONTH(reg_date)="'.$mm.'" AND YEAR(reg_date)="'.$yr.'"';	
	$result = sql_query($db_con, $sql_stmt);		
	$sum = (int) $result[0]['var'];	
		
	array_push($col_labels_cr, strtoupper($value));
	array_push($col_values_cr, $sum);	
}
array_shift($col_labels_cr);
array_pop($col_values_cr);
//var_dump($col_labels_cr, $col_values_cr);

# monthly stats
$tb = 'debit';
$months = Lists::MONTH_SHORT;
$mm = 0; $yr = date('Y');
$col_labels_dr = $col_values_dr = array();
foreach ($months as $value) 
{
	$mm += 1;
	$sql_stmt = 'SELECT SUM(amt) AS var FROM `'.$tb.'` WHERE MONTH(reg_date)="'.$mm.'" AND YEAR(reg_date)="'.$yr.'"';	
	$result = sql_query($db_con, $sql_stmt);		
	$sum = (int) $result[0]['var'];	
		
	array_push($col_labels_dr, strtoupper($value));
	array_push($col_values_dr, $sum);	
}
array_shift($col_labels_dr);
array_pop($col_values_dr);
//var_dump($col_labels_dr, $col_values_dr);
?>