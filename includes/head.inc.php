<?php require_once('config.inc.php'); ?>
<head>
  <meta charset="utf-8">
  <meta name="HandheldFriendly" content="true" />
  <meta name="viewport" content="width=device-width, height=device-height, user-scalable=no" />
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo ROOT; ?>favicon.ico">
  <link rel="shortcut icon" type="image/png" href="<?php echo ROOT; ?>favicon.png">
  <title><?php if (isset($_get['page'])) { echo ucwords($_GET['page']); } else { echo "Home"; } ?> - Port3M5.com</title>
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <link type="text/css" rel="stylesheet" media="screen" href="<?php echo ROOT; ?>stylesheet/screen.css">
  <![endif]-->
  <script src="<?php echo ROOT; ?>js/jquery-1.4.3.min.js"></script>
  <script src="<?php echo ROOT; ?>js/grid.js"></script>
  <script type="text/javascript" src="<?php echo ROOT; ?>js/prototype.js"></script>
	<script type="text/javascript" src="<?php echo ROOT; ?>js/scriptaculous.js?load=effects,builder"></script>
	<script type="text/javascript" src="<?php echo ROOT; ?>js/lightbox.js"></script>
  <style>article, aside, figure, footer, header, hgroup,
menu, nav, section { display: block; }</style>
  <link type="text/css" rel="stylesheet" media="screen and (min-device-width: 481px)" href="<?php echo ROOT; ?>stylesheet/screen.css">
  <link type="text/css" rel="stylesheet" media="only screen and (max-device-width: 480px)" href="<?php echo ROOT; ?>stylesheet/handheld.css">
  <link type="text/css" rel="stylesheet" media="handheld" href="<?php echo ROOT; ?>stylesheet/handheld.css">
  <link rel="stylesheet" href="<?php echo ROOT; ?>stylesheet/lightbox.css" type="text/css" media="screen" />
</head>