<?php
/*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    POUR TOUTE MODIFICATION VISANT A AMELIORER
    CE MODELE.
    VOUS ETES LIBRE DE TOUTE UTILISATION.
  ===================================================*/
    class AdminDB extends Model{
		
		//La base de données samane_test est dans view/test
		//Pour tester importer la 
        public function __construct(){
            parent::__construct();
        }

        public function getAdmin($ID)
        {
            $sql = "SELECT *
                     FROM admin
                     WHERE admin.id = ".$ID;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }
		
		public function addAdmin($login, $password, $nom, $prenom){
			$sql = "INSERT INTO admin VALUES(null, '$login', '$password', '$nom', '$prenom')";
			if($this->db != null)
			{
				$this->db->exec($sql);
				return $this->db->lastInsertId();//Si la clé primaire est auto_increment
											 //sinon return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function deleteAdmin($id){
			$sql = "DELETE FROM admin WHERE id = $id";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function updateAdmin($id, $login, $password, $nom, $prenom){
			$sql = "UPDATE admin SET login = '$login',
						login = '$login',
						password = '$password',
						nom = '$nom',
						prenom = '$prenom'
						WHERE id = $id";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function listeAdmin(){
			$sql = "SELECT * FROM admin";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
	}