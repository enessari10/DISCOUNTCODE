<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'testasamasinda_makro');
    define('DB_PASSWORD', '102030*Makro');
    define('DB_DATABASE', 'testasamasinda_makro');
    
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    if(mysqli_connect_errno()) { die("Veritabanına bağlanırken bir hata oluştu : ". mysqli_connect_error());   }  
    $db->set_charset("utf8");

?>