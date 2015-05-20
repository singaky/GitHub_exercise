<?php
  $link = mysql_connect('localhost', 'root', '');
  if (!$link) {
    die('false! <br>'.mysql_error());
  } else {
    echo 'success!';
  }
?>