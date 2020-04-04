<?php

class Worker
{
    private $id;
    private $user_id;
    private $name;
    private $surname;
    private $email;
    private $phone;
    private $image;
    private $created_at;
    private $updated_at;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    function getId()
    {
        return $this->id;
    }

    function getUser_id()
    {
        return $this->user_id;
    }

    function getName()
    {
        return $this->name;
    }

    function getSurname()
    {
        return $this->surname;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getPhone()
    {
        return $this->phone;
    }

    function getImage()
    {
        return $this->image;
    }

    function getCreated_at()
    {
        return $this->created_at;
    }

    function getUpdated_at()
    {
        return $this->updated_at;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function setUser_id($user_id)
    {
        $this->user_id = $user_id;
    }

    function setName($name)
    {
        $this->name = $this->db->real_escape_string($name);
    }

    function setSurname($surname)
    {
        $this->surname = $this->db->real_escape_string($surname);
    }

    function setEmail($email)
    {
        $this->email = $this->db->real_escape_string($email);
    }

    function setPhone($phone)
    {
        $this->phone = $phone;
    }

    function setImage($image)
    {
        $this->image = $image;
    }

    function setCreated_at($created_at)
    {
        $this->created_at = $created_at;
    }

    function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;
    }

    public function save()
    {
        $sql = "INSERT INTO workers VALUES(NULL, {$this->getUser_id()}, '{$this->getName()}', '{$this->getSurname()}', '{$this->getEmail()}', '{$this->getPhone()}', '{$this->getImage()}', CURDATE(), CURDATE());";
        $save = $this->db->query($sql);
      

        $result = false;
        if ($save) {
            $result = true;
        }

        return $result;
    }

    public function getAll()
    {
        Utils::isIdentity();
        if ($_SESSION['admin']) {
            $identity_id = $_SESSION['identity']->id;
        }
        $worker_show = $this->db->query("SELECT * FROM workers WHERE $identity_id = user_id ORDER BY id DESC;");
    
        return $worker_show;
        
    }

    public function getOne()
    {
        $email = $this->db->query("SELECT * FROM workers WHERE email = {$this->getEmail()} ");
        return $email->fetch_object();

    }

    public function getOnebyid()
    {
        $byid = $this->db->query("SELECT * FROM workers WHERE id = {$this->getId()} ");
       
        return $byid->fetch_object();

    }

    public function edit(){

		$sql = "UPDATE workers SET name='{$this->getName()}', surname='{$this->getSurname()}', email='{$this->getEmail()}', updated_at = CURDATE()";
		
		if($this->getImage() != null){
			$sql .= ", image='{$this->getImage()}'";
        }
        
		$sql .= " WHERE id='{$this->id}';";
       
		
        $save = $this->db->query($sql);

		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
    }

    public function delete(){
		$sql = "DELETE FROM workers WHERE id={$this->id}";
		$delete = $this->db->query($sql);
		
		$result = false;
		if($delete){
			$result = true;
		}
		return $result;
	}
}
