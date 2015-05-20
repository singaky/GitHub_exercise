<?php
  $link = mysqli_connect('localhost', 'root', '');
  if (!$link) {
    die('false! <br>'.mysqli_error());
  } else {
    echo 'success!';
  }
?>