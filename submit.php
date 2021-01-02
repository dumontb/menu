<?php
    extract($_REQUEST);
    $file=fopen("info.txt","a");

//    fwrite($file, date("m/dh:ia") ." => ");
//    fwrite($file, $name ." - ");
//    fwrite($file, $phonenumber ."\n");

    fwrite($file, date("m/d_h:ia") ." => " .$name ." : " .$phonenumber ."\n");


//    
//    fwrite($file,"name :");
//    fwrite($file, $username ."\n");
//    fwrite($file,"Email :");
//    fwrite($file, $email ."\n");
//    fwrite($file,"Password :");
//    fwrite($file, $password ."\n");

    fclose($file);
    header("location: index.php");
 ?>
