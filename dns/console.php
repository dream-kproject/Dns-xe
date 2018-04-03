<?php
$dbhost = "";
$dbuser = "";
$dbpassword = "";
$dbname = "";

$type = $_GET['type'];


class DB {
    public static $sql;
}

/*DB 연결*/
DB::$sql = new mysql($dbhost, $dbuser, $dbpassword, $dbname);
 // DB::$conn->query(...);


function A(){
  $command = $_GET['command'];
  $host = $_GET['host'];
  $name = $_GET['name'];

  if($command = "add"){
     // add command 일시
    
     echo "<script>alert('완료'); history.href=-1;</script>"; 
  }else if($command = "del"){
    // delete command 일시
    
     echo "<script>alert('완료'); history.href=-1;</script>"; 
  }else if($command = "change"){
    // change command 일시
    
  echo "<script>alert('완료'); history.href=-1;</script>"; 
  }else{
   echo "<script>alert('NOT Command!!'); history.href=-1;</script>"; 
  }
  
}

$type;

?>
