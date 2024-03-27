<?PHP
Context::set(NULL,'index.php');

Context::set('Dashboard','dashboard.php');

Context::set('Executive Summary', 'home.php');

Context::set('View Investors','view_users.php');
Context::set('Edit Investor','edit_user.php');
Context::set('Add Investor','add_user.php');

Context::set('View Deposits','view_credits.php');
Context::set('Update Deposit','edit_credit.php');
Context::set('New Deposit','add_credit.php');

Context::set('View Payouts','view_debits.php');
Context::set('Update Payout','edit_debit.php');
Context::set('New Payout','add_debit.php');

Context::set('Profile','profile.php');

Context::set('User Account','view_user.php');
Context::set('Investment History','view_user_cr.php');
Context::set('Payout History','view_user_dr.php');

Context::set('Settings','settings.php');

Context::set('View Admins','view_admins.php');
Context::set('Add Admin','add_admin.php');

Context::set('View Tickets','view_tickets.php');
Context::set('Add Ticket','add_ticket.php');

Context::set('Software License Expired!','anum.php');

//Context::map();
extract(Context::get());
?>
