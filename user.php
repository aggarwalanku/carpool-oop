<?php

	class user{
		private $userId = '';
		private $name = '';
		private $phone = '';
		private $password = '';
		private $age = 0;
		private $rating = 0;
		private $emailId = '';
		function __construct( $userId = '', $name = '' , $phone = '' , $password = '' , $age = 0 , $rating = 0 , $emailId = ''){
			$this->userId = $userId;
			$this->name = $name;
			$this->phone = $phone;
			$this->password = $password;
			$this->age = $age;
			$this->rating = $rating;
			$this->emailId = $emailId;
		}
		public function getUserId(){
			return $this->userId;
		}
		public function setUserId( $userId ){
			$this->userId = $userId;
		}
		public function getname(){
			return $this->name;
		}
		public function setname( $userId ){
			$this->userId = $name;
		}
		public function getphone(){
			return $this->phone;
		}
		public function setphone( $phone ){
			$this->phone = $phone;
		}
		public function getpassword(){
			return $this->password;
		}
		public function setpassword( $password ){
			$this->password = $password;
		}
		public function getage(){
			return $this->age;
		}
		public function setage( $age ){
			$this->age = $age;
		}
		public function getrating(){
			return $this->rating;
		}
		public function setrating( $rating ){
			$this->rating = $rating;
		}
		public function getUserId(){
			return $this->userId;
		}
		public function setemailId( $emailId ){
			$this->emailId = $emailId;
		} 
		private function encryptingUserPassword( $password = ''){
			return hash('sha256', $password);
		}
		public function login( $emailId = '' , $password = ''){
			$password = encryptingUserPassword( $password );
			$db = new dbClass($emailId , $password);
			db.login()

		}
		public function signin(){

		}
		public function logout(){
			redirect('login.php');
		}
		public function getUserInformation( $UserId)
		{
			$db = new db;
			return $db.queryUserInformation($UserId);
		}
	}
?>	