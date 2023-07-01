<?php
function conString1()
{
   $servername = "localhost";
   // $username = "root";
   // $password = "";
   // $dbname = "autumnspurs";

   $username = "u652899044_autumnspurs";
   $password = "Aeronautical1#";
   $dbname = "u652899044_autumnspurs";

   // connect the database with the server
   $conn = new mysqli($servername, $username, $password, $dbname);

   // if error occurs 
   if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
      exit();
   }
   return $conn;
}
