<?php
class ConnectionToDB{
   public static $conn=NULL;
	public static function SqlConnection(){ 
    $serverName="localhost";
    $userName="root";
    $password="";
    $database="signup";
   $conn=mysqli_connect($serverName,$userName,$password,$database);
   return $conn;
}
}
class User{
   public function register($uName,$uLastName,$uPass,$uEmail){
   $conn=ConnectionToDB::SqlConnection();
   
   $stmt=mysqli_stmt_init($conn);
   
   $sql="INSERT INTO Users(FirstName,LastName,Password,Email) VALUES (?,?,?,?);";
   
   if(!mysqli_stmt_prepare($stmt,$sql)){
   echo "Sorry Something Wrong Happen Here";          
        }
   else{

        
       mysqli_stmt_bind_param($stmt,"ssss",$uName,$uLastName,$uPass,$uEmail);
       mysqli_stmt_execute($stmt);
     echo "<center><font face='verenda' size='4' color='green'>Registered succesfully</center>";
   
 
 }


   }
}

?>