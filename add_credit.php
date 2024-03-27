<?php include_once 'inc/top.php'; ?>  
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.php'; ?>  
  </td><td>
  <main class="tmp-base">     
		<?php $list_nav_key = 'New Deposit'; include_once 'inc/nav.php'; ?>
    
    <form class="tmp-form" <?php echo FORM_ATTRIB; ?>>
      <fieldset>    
        <table class="tmp-grid" border="0">
          <tr>
            <td colspan="1">
              <label>Deposit Date:</label>
              <input type="date" name="reg_date" value="<?php echo $_POST['reg_date']; ?>" required />
            </td>
            <td colspan="3">
              <label>Investor Account:</label>
              <select name="user_id" required>
                <option></option>
                <?php echo $ddl_user_id; ?>
              </select>
            </td>
          </tr>
          <tr>
          	<td colspan="1">
              <label>Invested Capital (&#8358;):</label>
              <input type="number" name="p" min="500000" max="" step="500" value="<?php echo $_POST['p']; ?>" required />
            </td>          
          	<td colspan="1">
              <label>Interest Rate (%):</label>
              <input type="number" name="r" min="5" max="5" value="<?php echo $_POST['r']; ?>" required />
            </td>
          	<td colspan="1">
              <label>Tenure (in Months):</label>
              <input type="number" name="t" min="6" max="12" step="6" value="<?php echo $_POST['t']; ?>" required />
            </td>
          </tr>
         </table>
        <div class="action">
          <button type="reset" class="sec">Clear</button> &nbsp;
          <button type="submit" class="pri">Save</button>
        </div>
      </fieldset>
    </form>
  </main>    
</td></tr></table> <!-- end of frame -->
<?php include_once 'inc/footer.php'; ?>
<?php include_once 'inc/end.php'; ?>


