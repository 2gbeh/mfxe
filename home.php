<?php include_once 'inc/top.php'; ?>
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.php'; ?>  
  </td>
  <td>  
    <main class="tmp-base">  
			<?php $list_nav_key = 'Executive Summary - '.date('M, Y'); include_once 'inc/nav.php'; ?>     
      
      <table class="tmp-ribbon" border="0">
        <tr>
          <td>Investor</td>
          <td>Invesment</td>
          <td>Deposit (CR)</td>
          <td>Payout (DR)</td>
          <td>Balance</td>
        </tr>    
        <tr>
          <th><?php echo $tot_user_this_month; ?></th>    
          <th><?php echo $tot_inv_this_month; ?></th>
          <th class="high"><?php echo $sum_cr_this_month_buf; ?></th>
          <th class="low"><?php echo $sum_dr_this_month_buf; ?></th>
          <th class="mid"><?php echo $bal_this_month_buf; ?></th>
        </tr>
      </table>
      <p></p>      
      
      <table class="tmp-table" border="0">
        <tr>
          <th width="1">#</th>      
          <th nw>Investor Account</th>
          <th>Bank</th>
          <th>Account Name</th>
          <th>Account No.</th>
          <th>Amount</th>          
          <th>Due Date</th>
	        <th width="1">&nbsp;</th>
        </tr>      
        <tbody>
          <?php echo $rows; ?>
        </tbody>
      </table>
      <p></p>
      
      <?php echo $pager->nav; ?>      
    </main>    
</td></tr></table> <!-- end of frame -->
<?php include_once 'inc/footer.php'; ?>
<?php include_once 'inc/end.php'; ?>