<?php require_once('functions.inc.php'); ?>
<nav>
  <ul>
    <li class="nav-home<?php currentPage("", $page); currentPage("home", $page); ?>"><a href="<?php echo ROOT; ?>home">Portfolio</a></li>
    <li class="nav-skills<?php currentPage("skills", $page); ?>"><a href="<?php echo ROOT; ?>skills">Skills</a></li>
    <li class="nav-about<?php currentPage("about", $page); ?>"><a href="<?php echo ROOT; ?>about">About</a></li>
  </ul>
</nav>