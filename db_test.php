<?php
  $link = mysqli_connect('localhost', 'root', '');
  if (!$link) {
    die('false! <br>'.mysqli_error());
  } else {
    echo 'success!';
    mysqli_set_charset($link, "utf8");
  }
?>