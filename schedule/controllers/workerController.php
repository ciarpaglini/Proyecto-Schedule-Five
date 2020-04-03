<?php
require_once 'models/worker.php';

 class workerController {

     public function add(){
         require_once 'views/worker/add.php';
     }

     public function save(){
		Utils::isAdmin();
		if(isset($_POST)){
			$name = isset($_POST['name']) ? $_POST['name'] : false;
			$surname = isset($_POST['surname']) ? $_POST['surname'] : false;
			$email = isset($_POST['email']) ? $_POST['email'] : false;
            //$imagen = isset($_POST['imagen']) ? $_POST['imagen'] : false;
			
			if($name && $surname && $email){
                $identity = $_SESSION['identity'];
				$worker = new Worker();
				$worker->setName($name);
				$worker->setSurname($surname);
                $worker->setEmail($email);
				$worker->setUser_id($identity->id);

				// Guardar la imagen
				if(isset($_FILES['image'])){
					$file = $_FILES['image'];
					$filename = $file['name'];
					$mimetype = $file['type'];

					if($mimetype == "image/jpg" || $mimetype == 'image/jpeg' || $mimetype == 'image/png' || $mimetype == 'image/gif'){

						if(!is_dir('uploads/images')){
							mkdir('uploads/images', 0777, true);
						}

						$worker->setImage($filename);
						move_uploaded_file($file['tmp_name'], 'uploads/images/'.$filename);
					}
                }

				if(isset($_GET['id'])){
					$id = $_GET['id'];
					$worker->setId($id);
					
                    $save = $worker->edit();
				}else{
					$save = $worker->save();
                }
           
				
				if($save){
					$_SESSION['producto'] = "complete";
				}else{
					$_SESSION['producto'] = "failed";
				}
			}else{
				$_SESSION['producto'] = "failed";
			}
		}else{
			$_SESSION['producto'] = "failed";
		}
		header('Location:'.base_url.'schedule/index');
	}

	public function gestion(){
		Utils::isAdmin();
      
		$schedule = new Worker();
        $schedules = $schedule->getAll();
        
		require_once 'views/worker/gestion.php';
	}

	public function edit(){
		Utils::isAdmin();
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$edit = true;
			
			$worker = new Worker();
			$worker->setId($id);
		
			$pro = $worker->getOnebyid();

			
			require_once 'views/schedule/index.php';
			
		}else{
			header('Location:'.base_url.'worker/gestion');
		}
		

	}
	public function eliminar(){
		Utils::isAdmin();
		
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$worker = new Worker();
			$worker->setId($id);
			
			$delete = $worker->delete();
			if($delete){
				$_SESSION['delete'] = 'complete';
			}else{
				$_SESSION['delete'] = 'failed';
			}
		}else{
			$_SESSION['delete'] = 'failed';
		}
		
		header('Location:'.base_url.'worker/gestion');
	}

 }