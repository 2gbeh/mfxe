<?php include_once 'inc/top.php'; ?>  
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.php'; ?>  
  </td><td>
  <main class="tmp-base">     
		<?php $list_nav_key = 'User Account'; include_once 'inc/nav.php'; ?>
    
    <section class="tmp-profile">
      <ul>
        <li>
        	<img src="<?php echo $dir . $row['passport']; ?>" alt="" />          
          <div class="action">
            <button class="btn btn-sec" onClick="onDelete(<?php echo $row['ID']; ?>)" title="Delete">
            	<i class="fa fa-trash"></i>
            </button> &nbsp;
            <button class="btn btn-pri" onClick="onEdit(<?php echo $row['ID']; ?>)" title="Edit">
            	<i class="fa fa-pencil-alt"></i>
            </button>        
          </div>            
        </li>
        <li>
          <table border="0">
            <tr>
              <td><i class="fa fa-user-alt"></i></td>
              <td>
                <?php echo ucwords($row['surname']); ?>
                <label>Surname</label>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-address-book"></i></td>
              <td>
                <?php echo ucwords($row['names']); ?>
                <label>Other Names</label>
              </td>
            </tr>         
            <tr>
              <td><i class="fa fa-transgender-alt"></i></td>
              <td>
                <?php echo enum_f(Lists::GENDER, $row['gender']); ?>
                <label>Gender</label>
              </td>
            </tr>
            <tr>
              <td><i class="fa fa-envelope"></i></td>
              <td>
                <?php echo null_f($row['email']); ?>
                <label>Email</label>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-mobile-alt"></i></td>
              <td>
                <?php echo $row['mobile'] .'<br/>'. $row['phone']; ?>
                <label>Mobile</label>
              </td>
            </tr>
            <tr>
              <td><i class="fa fa-home"></i></td>
              <td>
                <?php echo $row['address']; ?>
                <label>Address</label>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-city"></i></td>
              <td>
                <?php echo enum_f(Lists::STATE, $row['state']); ?>
                <label>Location</label>
              </td>
            </tr>            
          </table>        
        </li>
        <li>
          <table border="0">
            <tr>
              <td><i class="fas fa-map-marker-alt"></i></td>
              <td>
                <?php echo enum_f(Lists::COUNTRY, $row['country']); ?>
                <label>Nationality</label>
              </td>
            </tr>          
            <tr>
              <td><i class="fas fa-school"></i></td>
              <td>
                <?php 
									$religion = enum_f(Lists::RELIGION, $row['religion']);
									echo null_f($religion); 
								?>
                <label>Religion</label>
              </td>
            </tr>
            <tr>
              <td><i class="fa fa-briefcase"></i></td>
              <td>
                <?php echo null_f($row['occupation']); ?>
                <label>Occupation</label>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-landmark"></i></td>
              <td>
                <?php echo enum_f(Lists::BANK, $row['bank']); ?>
                <label>Bank Name</label>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-credit-card"></i></td>
              <td>
                <?php echo $row['acct_name']; ?>
                <label>Account Name</label>
              </td>
            </tr>
            <tr>
              <td><i class="far fa-credit-card"></i></td>
              <td>
                <?php echo $row['acct_no']; ?>
                <label>Account Number</label>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-hands-helping"></i></td>
              <td>
                <?php echo null_f($row['referral']); ?>
                <label>Referral</label>
              </td>
            </tr> 
          </table>        
        </li>
        <li>
          <table border="0">
            <tr>
              <td><i class="fas fa-landmark"></i></td>
              <td>
                <?php 
									if ($row['bank_alt'] == NULL)
										echo 'N/A';
									else 
										echo enum_f(Lists::BANK,$row['bank_alt']); 
								?>
                <label>Bank Name (Alt)</label>
              </td>
            </tr>          
            <tr>
              <td><i class="fas fa-credit-card"></i></td>
              <td>
                <?php echo null_f($row['acct_name_alt']); ?>
                <label>Account Name (Alt)</label>
              </td>
            </tr>
            <tr>
              <td><i class="far fa-credit-card"></i></td>
              <td>
                <?php echo null_f($row['acct_no_alt']); ?>
                <label>Account Number (Alt)</label>
              </td>
            </tr> 
            <tr>
              <td><i class="far fa-address-card"></i></td>
              <td>
                <?php 
									if ($row['valid_id'] == NULL)
										echo 'N/A';
									else 
										echo enum_f(Lists::VALID_ID,$row['valid_id']); 
								?>
                <label>Valid ID</label>
              </td>
            </tr> 
            <tr>
              <td><i class="fas fa-address-card"></i></td>
              <td>
                <?php echo null_f($row['valid_id_no']); ?>
                <label>Valid ID S/N</label>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-passport"></i></td>
              <td>
                <?php 
									if ($row['valid_id_file'] == NULL)
										echo 'N/A';
									else
									{
										$img = $dir_2 . $row['valid_id_file'];
										echo '<a href="'.$img.'" target="_new">'.$row['valid_id_file'].'</a>'; 
									}
								?>
                <label>Valid ID File</label>
              </td>
            </tr>                                  
            <tr>
              <td><i class="fa fa-calendar-alt"></i></td>
              <td>
                <?php echo date_f($row['DATE']); ?>
                <label>Registered on</label>
              </td>
            </tr>
          </table>        
        </li>                
      </ul>
    </section>
  </main>    
</td></tr></table> <!-- end of frame -->
<?php include_once 'inc/footer.php'; ?>
<?php include_once 'inc/end.php'; ?>


