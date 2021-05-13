<?php
$servername = "sql210.epizy.com";
$username1 = "epiz_28610295";
$password1 = "yNScaO9qNn0";
$database = "epiz_28610295_library";

$conn = mysqli_connect($servername,$username1,$password1,$database);
if(!$conn){
  
   die("Eroor". mysqli_connect_error());
}
