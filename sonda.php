<?php



class DB {

    protected $host;
    protected $username;
    protected $password;

    public function __construct($host, $username, $password){
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
    }

    public function select($query){

        $database = new mysqli("localhost","root","bonimat","sondadb");

        if ($database->connect_errno ) {
            echo "Failed to connect to MySQL: " . $database->connect_error;
        }

        $result = $database->query( $query);

        $database->close();

        return $result;
    }


}

class Sonda {

    public function __construct(){
    }

    public function underLimit(){
        $database = new DB("moodle.oracle-db[MOODLE]", "KTiR9xm2", "app_moodle_sts");

        $query = "SELECT * FROM ATENEO_LOG_DAT.T_LOGON_TRACE​";

        $result = $database->select($query);


        return $result;
    }
}

echo 'Sonda';
