<?PHP
# 
$db_con = connect_db(USERNAME, PASSWORD, DATABASE);				

# 
Anum::main(HOSTED);

#
$enum_admin = array(NULL,'Front Desk','Customer Care','Manager','Owner','Webmaster');

# 
$sizeof_user = sql_count($db_con, 'user');
$sizeof_credit = sql_count($db_con, 'credit');
$sizeof_debit = sql_count($db_con, 'debit');
$sizeof_admin = sql_count($db_con, 'admin');

#
$list_nav = array(
	'User Account' => array(
		array('view_user_cr.php?v=true&q='.$_GET['q'], 'fa fa-list', 'Investment History'),
		array('view_user_dr.php?v=true&q='.$_GET['q'], 'fa fa-list', 'Payout History'),
		array('view_users.php', 'fa fa-list', 'Other Investors')		
	),	
	'My Account' => array(
		array('profile.php', 'fa fa-user-alt', 'Profile Info'),
		array('settings.php', 'fa fa-user-edit', 'Update Password')
	),
	'Admin Account' => array(
		array('add_admin.php', 'fa fa-plus', 'Add New'),
		array('view_admins.php', 'fa fa-list', 'View Records')
	),
	'Help Desk' => array(
		array('add_ticket.php', 'fa fa-plus', 'Add New'),
		array('view_tickets.php', 'fa fa-list', 'View Records')
	),
);

#
$list_aside_top = array(
	array('dashboard.php', 'fa fa-chart-area', 'Dashboard'),
	array('home.php', 'fa fa-briefcase', 'Executive Summary'),	
	array('add_user.php', 'fa fa-user-plus', 'Add Investor'),
	array('view_users.php', 'fa fa-address-book', 'Manage Investors', $sizeof_user),
	array('add_credit.php', 'fas fa-donate', 'New Deposit'),	
	array('view_credits.php', 'fas fa-file-invoice-dollar', 'Manage Deposits', $sizeof_credit),		
	array('add_debit.php', 'fa fa-wallet', 'New Payout'),
	array('view_debits.php', 'fas fa-file-invoice-dollar', 'Manage Payouts', $sizeof_debit),	
);

#
$list_aside_bell = '<img src="img/bell.png" alt="" />';
$list_aside_end = array(
	array('profile.php', 'fa fa-user-cog', 'My Account'),
	array('view_admins.php', 'fa fa-users-cog', 'Admin Account', $sizeof_admin),
	array('view_tickets.php', 'fas fa-exclamation-triangle', 'Help Desk', $list_aside_bell),
	array(WEBMAIL, 'fas fa-inbox', 'Access Webmail'),
	array(CPANEL, 'fa fa-server', 'Access cPanel'),
	array(INDEX, 'fa fa-globe', 'Visit Website')
);

# 


?>