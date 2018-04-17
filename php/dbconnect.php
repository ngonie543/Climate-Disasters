<?php
 define('HOST','localhost');
 define('USER','root');
 define('PASS','root');
 define('DB','climate_disasters_db');
 
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');