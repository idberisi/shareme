<?php
  $dir    = '/storage/AA05-E6A8';
  $files1 = scandir($dir);
  $files2 = scandir($dir, 1);

  print_r($files1);
  print_r($files2);
?>
