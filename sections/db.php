<?php

try{
    $db=new PDO("mysql:host=localhost;dbname=server_cms;charset=utf8",'server_cms','qrqdnfpQ');
   // echo "bağlandı";
}
catch(PDOException $e){
    echo $e->getMessage();
}

