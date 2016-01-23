<?php
  @$db = mysql_pconnect("localhost", "root", "root");
    //checking connecting
     if (!$db)
        {
          echo "Error: Could not connect to database, Please try again.";
        }            
        //selecting database to use among the databases in phpmyadmin
        $mysql = mysql_select_db("TUMENQUIRY-DB", $db);
         if(!$mysql)
           {
              echo "Cannot select database.";
           }
?>