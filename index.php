<?php
	require_once('includes/config.inc.php');
	require_once('includes/functions.inc.php');
?>
<!doctype html>
<html lang="en">
<!-- import the head section -->
<?php require_once("includes/head.inc.php"); ?>

<body>
<header><h1><a href="http://port3m5.com"><img src="<?php echo ROOT; ?>stylesheet/images/logo.png" alt="Anthony Porthouse"></a></h1></header>
<!-- Import Nav -->
<?php require_once('includes/nav.inc.php'); ?>

<div id="wrapper">
  <!-- Import Content -->
  <?php getPage($page); ?>
  <!-- Import Footer Section -->
  <?php require_once('includes/footer.inc.php'); ?>
</div>
</body>
</html>
