<?php include_once 'inc/top.php'; ?>  
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.php'; ?>  
  </td><td>
  <main class="tmp-base">     
		<?php $list_nav_key = 'Investor Payouts'; include_once 'inc/nav.php'; ?>
  
    <table class="tmp-table" border="0">
    	<caption><?php echo $bio; ?></caption>    
      <tr>  
        <th width="1">#</th>
        <th>Month</th>
        <th>Year</th>        
        <th>Amount (&#8358;)</th>
        <th>Balance (&#8358;)</th>
        <th>Date Paid</th>       
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