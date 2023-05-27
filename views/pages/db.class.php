<?php
    class DB{
        private $host=`localhost`;
        private $username='root';
        private $password='';
        private $database='store data base';
        public $db;
        public function_ construct($host=null, $username=null, $password=null, $database=null){
            if($host!=null){
                $this->host=$host;
                $this->username=$username;
                $this->password=$password;
                $this->database=$database;
            }
            $this->db= new PDO('mysql:host='.$this->host. 'dbname='$this->database, $this->username, $this->password, 
            array(PDO:: MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8'))
        }
        public function query($sql, $data=array()){
            $req= $this->db->prepare($sql);
            $req->execute($data);
            return $req->fetchAll();
        }
    }