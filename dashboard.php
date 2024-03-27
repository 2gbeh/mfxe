<?php include_once 'inc/top.php'; ?>
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.php'; ?>  
  </td>
  <td>  
    <main class="tmp-base">  
			<?php $list_nav_key = 'Dashboard'; include_once 'inc/nav.php'; ?>
      
      <table class="chart_grid" border="0">
        <tr>
          <td colspan="1">
            <?php echo Charts::ring_dark('Gender Demography', 'Male Investor', $ring_rate_m); ?>
          </td>        
          <td colspan="1">
            <?php echo Charts::ring_dark('Gender Demography', 'Female Investor', $ring_rate_f); ?>
          </td>           
          <td colspan="1">
            <?php echo Charts::macro('Total Investor', $tot_user, $rate_user_this_month); ?>
            <p></p>
            <?php echo Charts::macro('Total Investment', $tot_inv, $rate_inv_this_month); ?>
          </td>
          <td colspan="1">
            <?php echo Charts::macro('Total Deposit (CR)', $sum_cr_buf, $rate_cr_this_month); ?>
            <p></p>
            <?php echo Charts::macro('Total Payout (DR)', $sum_dr_buf, $rate_dr_this_month); ?>
          </td>
                 
				</tr>
        <tr>         
          <td colspan="2">
			      <?php echo Charts::column_pri('Monthly Deposit - Year '.date('Y'), $col_labels_cr, $col_values_cr, true); ?>
          </td>          
          <td colspan="2">
			      <?php echo Charts::column_sec('Monthly Payouts - Year '.date('Y'), $col_labels_dr, $col_values_dr, true); ?>
          </td>                    
				</tr>         
      </table>   
    </main>    
</td></tr></table> <!-- end of frame -->
<?php include_once 'inc/footer.php'; ?>
<?php include_once 'inc/end.php'; ?>