<?php

class Schedule
{
    private $id;
    private $worker_id;
    private $user_id;
    private $name;
    private $surname;
    private $schedule;
    private $active;
    private $code;
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

    function getWorker_id()
    {
        return $this->worker_id;
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

    function getSchedule()
    {
        return $this->schedule;
    }

    function getActive()
    {
        return $this->active;
    }

    function getCode()
    {
        return $this->code;
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

    function setWorker_id($worker_id)
    {
        $this->worker_id = $worker_id;
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

    function setSchedule($schedule)
    {
        $this->schedule = $this->db->real_escape_string($schedule);
    }

    function setActive($active)
    {
        $this->active = $active;
    }

    function setCode($code)
    {
        $this->code = $code;
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
        $sql = "INSERT INTO schedules VALUES(NULL, '{$this->getWorker_id()}', '{$this->getUser_id()}', '{$this->getName()}', '{$this->getSurname()}', '{$this->getSchedule()}', '{$this->getActive()}', '{$this->getCode()}', CURDATE(), CURDATE());";
        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }

        return $result;
    }

    //confirmacion codigo que llega por GET del correo

    public function confirCode(){

        $code = $this->code;

        $codificator = $this->db->query("SELECT * FROM schedules WHERE code = '$code'");
     
        $result = false;
        if ($codificator) {
            return $codificator->fetch_object();
        }else{
            return $result;
        }
        
    }

    //editar active a true para confirmación

    public function edit()
    {
        $sql = "UPDATE schedules SET active='{$this->getActive()}' WHERE worker_id='{$this->getWorker_id()}' AND code='{$this->getCode()}';";
        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    //retorna el objeto para comprobaciones

    public function getOneid()
    {
        $send = $this->db->query("SELECT * FROM schedules WHERE code = {$this->getCode()}");
        return $send->fetch_object();
    }

    public function getAll()
    {

        $schedule = $this->db->query("SELECT * FROM schedules ORDER BY updated_at DESC");
        return $schedule;
    
    }

    public function delete(){
		$sql = "DELETE FROM schedules WHERE id={$this->id}";
		$delete = $this->db->query($sql);
		
		$result = false;
		if($delete){
			$result = true;
		}
		return $result;
	}
}
