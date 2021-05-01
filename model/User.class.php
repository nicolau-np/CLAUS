<?php 

	Class User{

		private $id;
		private $name;
		private $user;
		private $email;
		private $password;
		private $nivel_acesso;

		private $SQLINSERT = "INSERT INTO `user`( `nome`, `email`, `user`, `senha`, `nivel_acesso`) VALUES (?,?,?,?,?)";



		public function setEmail($email){

			$this->email = $email;
		}

		public function setName($name){

			$this->name = $name;
		}

		public function setUser($user){

			$this->user = $user;
		}

		public function setPassword($password){

			$this->password = $password;
		}

		public function setNivel_acesso($nivel_acesso){

			$this->nivel_acesso = $nivel_acesso;
		}

		public function getName(){

			return $this->name;
		}
		public function getUser(){

			return $this->user;
		}

		public function getEmail(){

			return $this->email;
		}

		public function getPassword(){

			return $this->password;
		}
		public function getNivel_acesso(){

			return $this->nivel_acesso;
		}


		public function inserir_user(PDO $connection){
		$CLAUS = $connection->prepare($this->SQLINSERT);
        $CLAUS->execute(array(
            $this->getName(),
            $this->getEmail(),
            $this->getUser(),
            $this->getPassword(),
            $this->getNivel_acesso()

        ));
        return $connection->lastInsertId();
		}






	}

