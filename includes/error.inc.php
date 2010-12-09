<?php
  $errorType = $_GET['errorType'];
  $pageRequest = $_GET['pageRequest'];
?>
<?php if($errorType == '404'): ?>
	<h1>File missing</h1>
	<p>The page <code><?php echo $pageRequest; ?></code> was missing. So now you ended up here, try to not break it next time, kay?</p>
<?php elseif($errorType == '403') : ?>
	<h1>NO ENTRY</h1>
	<p>You aren't allowed to look at <code><?php echo $pageRequest; ?></code>! It's secret!</p>
<?php else: ?>
	<h1>WTH!</h1>
	<p>What did you even do? I don't even.</p>
<?php endif; ?>