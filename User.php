<?php 

	Class User{

		private $id;
		private $name;
		private $email;
		private $password;



		public function setEmail($email){

			$this->email = $email;
		}

		public function setName($name){

			$this->name = $name;
		}

		public function setPassword($password){

			$this->password = $password;
		}

		public function getName(){

			return $this->name;
		}

		public function getEmail(){

			return $this->email;
		}

		public function getPassword(){

			return $this->password;
		}


	}



 ?>