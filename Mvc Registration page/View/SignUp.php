<?php
require_once '../Controller/SignUpController.php';
$Controller=new SignUpController();

if(isset($_POST['submit'])){
$uName=$_POST['FirstName'];
$uLastName=$_POST['LastName'];
$uPass=$_POST['Password'];
$uEmail=$_POST['Email'];
  if(!preg_match("/^[a-zA-Z]*$/",$uName)||!preg_match("/^[a-zA-Z]*$/",$uLastName)){
    header("Location:SignUp.php?submit=Incorrect charcter used for first or last name");
    exit();
  }
  else{
        if(!stristr($uEmail,"@")OR !stristr($uEmail,".")){
           echo "<center><font face='verenda' size='2' color='red'>Invalid Email</center>";
        }
       else{
            $Controller->registerUser($uName,$uLastName,$uPass,$uEmail);

}
}
}
?>
<Doctype html>
  <head>
    <style type="text/css">
      .submit{border:none;
        color:#000;
        font-size: 1em;
        font-weight: normal;
        padding: 10px 50px;
        border-radius:10px;
        background-color: red}
 input{
  max-width:500px;
  
  padding:5px 10px;
  margin: 5px 10px;
 }
 label{
  margin: 3px;
 }
 .formInputDiv{

background-color:blue;
border-radius: 2%;
width: 70%;
height: 70  %;
margin:0 auto;
display: table;
vertical-align: middle;
color:white;
font-style: italic;
 }
 .holder{
  width: 100%;
  height: 100%;
 }
 .container{

  width: 50%;
  margin:0 auto;
  display: table;
  padding-top:5%; 
 }
     </style>
  </head>
	<html>
       <head>
       <title>Sign In</title>
       <meta charset="utf-8">		
       </head>
<body>
  
  <div class="formInputDiv">
	<form method="POST" action="SignUp.php">
<div class="container">
<h2>Registeration Page</h2>

<label>First Name</label><br/><input name="FirstName" type="text" placeholder="First Name" required><br/>
<label>Last Name</label><br/><input name="LastName" type="text" placeholder="Last Name" required><br/>
<Label>Password</Label><br/><input name="Password" type="password" required><br/>
<Label>Email</Label><br/><input name="Email" type="text" required><br/>

    <input class="submit"name="submit" type="submit" value="Sign In">
    </div>
</form>
</div>

</body>
	</html>
	</html>