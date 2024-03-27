<?php require_once 'inc/top.php'; ?>
<main>
<?php


var_dump(
$_FILES,
dirname($_SERVER['DOCUMENT_ROOT'] . $_SERVER['PHP_SELF']) . '/', 
upload_file($_FILES['file'],'uploads/')


);
?>  
<form class="tmp-form" <?php echo FORM_ATTRIB; ?>>
  <input type="file" name="file" required />
  <input type="submit" />
</form>
</main>    
<?php require_once 'inc/end.php'; ?>  


