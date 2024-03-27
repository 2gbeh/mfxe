<?php include_once 'inc/top.php'; ?>  
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.php'; ?>  
  </td><td>
  <main class="tmp-base">     
		<?php $list_nav_key = 'Edit Investor Profile'; include_once 'inc/nav.php'; ?>
    
    <form class="tmp-form" <?php echo FORM_ATTRIB; ?>>
      <fieldset>    
        <table class="tmp-grid" border="0">
        	<tr>
          	<td colspan="1">
              <label><x>*</x> Registration Date:</label>
              <input type="date" name="reg_date" value="<?php echo $_POST['reg_date']; ?>" required />
            </td>                  
          	<td colspan="3">&nbsp;</td>
          </tr>
        	<tr>
          	<td colspan="1">
              <label>Passport Photo:</label>
					    <input type="file" name="passport" accept="image/*" />
            </td>          
          	<td colspan="1">
              <label><x>*</x> Surname:</label>
              <input type="text" name="surname" value="<?php echo $_POST['surname']; ?>" required />
            </td>
          	<td colspan="2">
              <label><x>*</x> Other Names:</label>
              <input type="text" name="names" value="<?php echo $_POST['names']; ?>" required />
            </td>
          </tr>
        	<tr>
          	<td colspan="1">
              <label><x>*</x> Select Gender:</label>
              <select name="gender" required>
                <option></option>
                <?php echo $ddl_gender; ?>
              </select>
            </td>
          	<td colspan="1">
              <label>Nationality:</label>
              <select name="country">
                <option></option>
                <?php echo $ddl_country; ?>
              </select>              
            </td>
          	<td colspan="1">
              <label>Religion:</label>
              <select name="religion">
                <option></option>
                <?php echo $ddl_religion; ?>
              </select>
            </td>
          	<td colspan="1">
              <label>Occupation:</label>
              <input type="search" name="occupation" value="<?php echo $_POST['occupation']; ?>" list="hint_occupation" />
              <?php echo $hint_occupation; ?>
            </td>
          </tr>          
        	<tr>
          	<td colspan="2">
              <label>Email Address:</label>
              <input type="email" name="email" value="<?php echo $_POST['email']; ?>" placeholder="Ex. example@domain.com" />
            </td>
          	<td colspan="1">
              <label><x>*</x> Mobile Number:</label>
              <input type="tel" name="mobile" value="<?php echo $_POST['mobile']; ?>" placeholder="Ex. +234(0)" maxlength="11" required />
            </td>
          	<td colspan="1">
              <label>Phone Number:</label>
              <input type="tel" name="phone" value="<?php echo $_POST['phone']; ?>" maxlength="11" />
            </td>
          </tr>
        	<tr>
          	<td colspan="3">
              <label><x>*</x> Home Address:</label>
              <input type="search" name="address" value="<?php echo $_POST['address']; ?>" required />
            </td>
          	<td colspan="1">
              <label><x>*</x> Location:</label>
              <select name="state" required>
                <option></option>
                <?php echo $ddl_state; ?>
              </select>
            </td>
          </tr>
        	<tr>
          	<td colspan="1">
              <label><x>*</x> Bank Name:</label>
              <select name="bank" required>
                <option></option>
                <?php echo $ddl_bank; ?>
              </select>
            </td>
          	<td colspan="2">
              <label><x>*</x> Account Name:</label>
              <input type="text" name="acct_name" value="<?php echo $_POST['acct_name']; ?>" required />
            </td>
          	<td colspan="1">
              <label><x>*</x> Account Number:</label>
              <input type="number" name="acct_no" value="<?php echo $_POST['acct_no']; ?>" required />
            </td>
          </tr> 
        	<tr>
          	<td colspan="1">
              <label>Bank Name (alternative):</label>
              <select name="bank_alt">
                <option value="0"></option>
                <?php echo $ddl_bank_alt; ?>
              </select>
            </td>
          	<td colspan="2">
              <label>Account Name (alternative):</label>
              <input type="text" name="acct_name_alt" value="<?php echo $_POST['acct_name_alt']; ?>" />
            </td>
          	<td colspan="1">
              <label>Account Number (alternative):</label>
              <input type="number" name="acct_no_alt" value="<?php echo $_POST['acct_no_alt']; ?>" />
            </td>
          </tr> 
        	<tr>
          	<td colspan="1">
              <label>Valid Means of ID:</label>
              <select name="valid_id">
                <option></option>
                <?php echo $ddl_valid_id; ?>
              </select>
            </td>
          	<td colspan="1">
              <label>Valid ID Serial Number:</label>
              <input type="text" name="valid_id_no" value="<?php echo $_POST['valid_id_no']; ?>" />
            </td>
          	<td colspan="1">
              <label>Upload Valid ID:</label>
              <input type="file" name="valid_id_file" />
            </td>
          	<td colspan="1">
              <label>Referred by:</label>
              <input type="search" name="referral" value="<?php echo $_POST['referral']; ?>" list="hint_referral" />
              <?php echo $hint_referral; ?>
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

