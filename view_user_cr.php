<?php include_once 'inc/top.php'; ?>  
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.php'; ?>  
  </td><td>
  <main class="tmp-base">     
		<?php $list_nav_key = 'Investor Deposits'; include_once 'inc/nav.php'; ?>
  
    <table class="tmp-table" border="0">
    	<caption><?php echo $bio; ?></caption>
      <tr>
        <th width="1">#</th>
        <th>Capital (&#8358;)</th>
        <th>Profit</th>
        <th ar>Tenure</th>
        <th title="Equated Monthly Instalment">EMI (&#8358;)</th>
        <th>Accrued (&#8358;)</th>
        <th>Returns (&#8358;)</th>
        <th>Start Date</th>
        <th>Maturity Date</th>        
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