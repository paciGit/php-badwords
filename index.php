<?php
  $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
  $change = $_GET['word'];

 ?>


  <p><?php echo $text; ?></p>

  <p>Lunghezza paragrafo: <?php echo  strlen($text) ?> Caratteri</p>

  <p><?php echo str_replace($change, '***', $text) ; ?></p>

  <p>Lunghezza paragrafo: <?php echo  strlen(str_replace($change, '***', $text)) ?> Caratteri</p>
