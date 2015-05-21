<?php
  $link = mysqli_connect('localhost', 'root', '');
  if (!$link) {
    die('false! <br>'.mysqli_error());
  } else {
    echo 'success!';
    mysqli_set_charset($link, "utf8");
    echo 'character code is' .mysqli_character_set_name($link).'.';
    mysql_close($link);
  }
?>