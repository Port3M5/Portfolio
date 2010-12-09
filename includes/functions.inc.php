<?php
	// Used to add the nav-current to the current page on the nav bar
  function currentPage($current, $expected) {
    if ($current == $expected) {
      echo " nav-current";
    }
  }
  
  // This function takes a page and displays the right content
  // Otherwise it displays a 404 error
  function getPage($page) {
    if($page == "") {
      include('content/home.inc.html');
    } elseif($page != null) {
      $filepath = 'content/' . $page . '.inc.html'; 
      if(file_exists($filepath)) {
        include($filepath);
      } else {
      	if (isset($_GET['errorType']) && isset($_GET['pageRequest'])) {
      		$errorType = $_GET['errorType'];
  				$pageRequest = $_GET['pageRequest'];
      		getError($errorType, $pageRequest);
      	} else {
      		getError('404', $page);
      	}
      }
    }
  }
  
  // This function handles displaying error pages
  function getError($errorType, $pageRequest) {
  	$_GET['errorType'] = $errorType;
  	$_GET['pageRequest'] = $pageRequest;
  	include('includes/error.inc.php');
  }