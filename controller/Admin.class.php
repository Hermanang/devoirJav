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
    class Admin extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model
            require_once 'model/AdminDB.php';
        }

		//A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
        //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){
            return $this->view->load("admin/index");
        }

        public function getID($id){
            $data['ID'] = $id;

            return $this->view->load("admin/get_id", $data);
        }
        
        public function get($id){
            //Instanciation du model
            $tdb = new AdminDB();

            $data['test'] = $tdb->getAdmin($id);
			
            return $this->view->load("admin/get", $data);
        }
		public function liste(){
            //Instanciation du model
            $tdb = new AdminDB();
			
            $data['tests'] = $tdb->listeAdmin();
			
            return $this->view->load("admin/liste", $data);
        }
	
	
		public function add(){
			//Instanciation du model
            $tdb = new AdminDB();
			//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                if(!empty($login) && !empty($password) && !empty($nom) && !empty($prenom)) {
                    $ok = $tdb->addAdmin($login, $password, $nom, $prenom);
                    $data['ok'] = $ok;
                }
            }
            
            return $this->view->load("admin/add", $data);
        }
		public function update(){
			//Instanciation du model
            $tdb = new AdminDB();
            if(isset($_POST['modifier'])){
                extract($_POST);
                if(!empty($id) && !empty($login) && !empty($password) && !empty($nom) && !empty($prenom)) {
                    $ok = $tdb->updateAdmin($id, $login, $password, $nom, $prenom);
                }
            }
           
            return $this->liste();//appel de la methode liste du controller
        }
        public function delete($id){
            //Instanciation du model
            $tdb = new AdminDB();
			//Supression
			$tdb->deleteAdmin($id);
			//Retour vers la liste
            return $this->liste();
        }
		
		public function edit($id){
			
            //Instanciation du model
            $tdb = new AdminDB();
			//Supression
			$data['test'] = $tdb->getAdmin($id);
			//chargement de la vue edit.html
            return $this->view->load("admin/edit", $data);
        }
    }
?>