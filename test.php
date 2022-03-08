<?php
         $dbhost = 'localhost';
         $dbuser = 'codenski_pngguru';
         $dbpass = '0a#hTk[0dQb{';
         $mysqli = new mysqli($dbhost, $dbuser, $dbpass);
         
         if($mysqli->connect_errno ) {
            printf("Connect failed: %s<br />", $mysqli->connect_error);
            exit();
         }
         printf('Connected successfully.<br />');
         $mysqli->close();
      ?>