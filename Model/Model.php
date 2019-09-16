<?php
require'../Core/Database.php';

class Model
{
    private $id;
    private $name;
    private $email;
    private $phone;
    private $jobTitle;
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
     /**
     * @return mixed
     */
    public function getjobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * @param mixed $jobTitle
     */
    public function setResume($resume)
    {
        $this->resume = $resume;
    }

        public function getResume()
    {
        return $this->resume;
    }

        public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
    }

    public function create()
    {
        $columns = "name, email, phone, job_title, resume";
        $values = "'$this->name','$this->email','$this->phone', '$this->jobTitle', '$this->resume' ";
        $this->db->insert('messages', $columns, $values);
      //  $this->db->get();
    }

//    public function save()
//    {
//        $this->id->create();
//    }

}