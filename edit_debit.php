<?php include_once 'inc/top.php'; ?>  
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.php'; ?>  
  </td><td>
  <main class="tmp-base">     
		<?php $list_nav_key = 'Update Payout'; include_once 'inc/nav.php'; ?>
    
    <form class="tmp-form" <?php echo FORM_ATTRIB; ?>>
      <fieldset>    
        <table class="tmp-grid" border="0">
          <tr>
            <td colspan="1">
              <label>Payout Date:</label>
              <input type="date" name="reg_date" value="<?php echo $_POST['reg_date']; ?>" required />
            </td>
            <td colspan="3">
              <label>Investor Account:</label>
              <select name="user_id" readonly required>
                <option></option>
                <?php echo $ddl_user_id; ?>
              </select>
            </td>
          </tr>
          <tr>
          	<td colspan="2">
              <label>Amount (&#8358;):</label>
              <input type="number" name="amt" value="<?php echo $_POST['amt']; ?>" required />
            </td>
          	<td colspan="1">
              <label>Payout Month:</label>
              <select name="mo" required>
                <option></option>
                <?php echo $ddl_month; ?>
              </select>
            </td>
          	<td colspan="1">
              <label>Payout Year:</label>
              <input type="tel" name="yr" value="<?php echo $_POST['yr']; ?>" maxlength="4" required />
            </td>
          </tr>
         </table>
        <div class="action">
          <input type="hidden" name="ID" value="<?php echo $_POST['ID']; ?>" readonly /> &nbsp; 
	        <!--<input type="hidden" name="admin_id" value="<?php echo $_USER['ID']; ?>" readonly />-->
          <button type="button" class="sec">Cancel</button> &nbsp;
          <button type="submit" class="pri">Update</button>
        </div>
      </fieldset>
    </form>
  </main>    
</td></tr></table> <!-- end of frame -->
<?php include_once 'inc/footer.php'; ?>
<?php include_once 'inc/end.php'; ?>


