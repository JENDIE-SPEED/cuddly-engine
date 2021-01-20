<?php
class DB{
    private $con;
    private $host='localhost';
    private $dbname='alexa';
    private $user='root';
    private $password='';

    public function __construct(){
        $dsn="mysql:host=" .$this->host .";dbname=" .$this->dbname;
        

        try{
            $this->con =new PDO($dsn, $this->user,$this->password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
            
        }catch (PDOException $e){
            echo "Connection failed:". $e->getMessage();
        }
    }
    public function viewData(){
        $query="SELECT serial From alocate_serial";
        $stmt=$this->con->prepare($query);
        $stmt->execute();
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function searchData($serial){
        $query="SELECT serial FROM alocate_serial WHERE serial LIKE :serial";
        $stmt=$this->con->prepare($query);
        $stmt->execute(["serial" => "%" . $serial . "%"]);
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;

    }
}


?>