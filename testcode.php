<?php

    
    //set it to writable location, a place for temp generated PNG files
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = 'temp/';

    include "qrlib.php";    
    
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    
  
    
    //processing form input
    //remember to sanitize user input in real-life solution !!!
    $errorCorrectionLevel = 'L';
      

    $matrixPointSize = 10;
 




        $data = "https://github.com/sachinmishra3";
    
        for ($i=0; $i < 1; $i++) { 

        $filename = $PNG_TEMP_DIR."-".$i."-".'qr.png';
        // echo 'You can provide data in GET parameter: <a href="?data=like_that">like that</a><hr/>';    
        QRcode::png($data.$i, $filename, $errorCorrectionLevel, $matrixPointSize, 1);    
            echo "generated. See <img src='".$PNG_WEB_DIR.basename($filename)."'/>";
        }
