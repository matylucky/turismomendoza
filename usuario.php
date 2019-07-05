<?php 
	/*
	*
	*
	*/
	class Usuario{
		private $id;
		private $USU_EMAIL;
		private $USU_PASS;

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getUSU_EMAIL(){
			return $this->nombre;
		}

		public function setUSU_EMAIL($USU_EMAIL){
			$this->nombre = $USU_EMAIL;
		}

		public function getUSU_PASS(){
			return $this->clave;
		}

		public function setUSU_PASS($USU_PASS){
			$this->clave = $USU_PASS;
		}
	}
?>
