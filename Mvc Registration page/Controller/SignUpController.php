<?php
require_once '../Model/SignUpData.php';

class SignUpController{
	public function registerUser($UserName,$UserLastName,$UserPass,$UserEmail){
		$UserData=new User();
        $UserData->register($UserName,$UserLastName,$UserPass,$UserEmail);

}

}

?>