<?php
/*DB 연결*/
$dbhost = "";
$dbuser = "";
$dbpassword = "";
$dbname = "";
class DB {
    public static $sql;
}
DB::$sql = new mysql($dbhost, $dbuser, $dbpassword, $dbname);
//DB::$conn->query(...);

class XE{
    define('__ZBXE__',true);
    require_once("./config/config.inc.php");
    $oContext = &Context::getInstance();
    $oContext->init();
    public static $no = $logged_info->member_srl;
    public static $id = $logged_info->user_id;
    public static $name = $logged_info->user_name;
    public static $nick = $logged_info->nick_name;
    public static $email = $logged_info->email_address;
    public static $home = $logged_info->homepage;
    public static $birth = $logged_info->birthday;
    public static $is_admin = $logged_info->is_admin;
    
}
// XE::$no 

/* RECORD TYPE GET*/
$type = $_GET['type'];

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
