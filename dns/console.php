<?php
$dbhost = "";
$dbuser = "";
$dbpassword = "";
$dbname = "";

$type = $_GET['type'];

/*DB 연결*/
$sql = new mysql($dbhost, $dbuser, $dbpassword, $dbname);

function A(){
  $command = $_GET['command'];
  $host = $_GET['host'];
  $name = $_GET['name'];

  if($command = "add"){
     // add command 일시
    
  }else if($command = "del"){
    // delete command 일시
    
  }else if($command = "change"){
    // change command 일시
    
  
  }else{
   echo "<script>alert('NOT Command!!'); history.href=-1;</script>"; 
  }
  
}

$type

?>
