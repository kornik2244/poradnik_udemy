<?php
class User{
	private $id;
	private $username;
	private $email;
	private $password;

	public function __construct($username, $password){
		$this->username = $username;
		$this->password = $password;
	}

	public function register(){
		echo 'User Registered';
	}

	public function login(){
		$this->auth_user();
	}

	public function auth_user(){
		//echo $this->username. ' is authenticated';
	}

	public function __destruct(){
		//echo 'Destructor called';
	}
}

$User = new User('Kornik', 'kornik123');

//$User->register();

//$User->login();


?>