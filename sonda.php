<?php



class DB {

    protected $host;
    protected $username;
    protected $password;

    public function __construct($host, $username, $password)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
    }

    public function select(){
        return 1;
    }
}

class Sonda {

    public function __construct(){
    }

    public function underLimit(){
        $database = new DB("moodle.oracle-db[MOODLE]", "KTiR9xm2", "app_moodle_sts");

        $query = "select * from ATENEO_LOG_DAT.T_LOGON_TRACE;​";


        return true;
    }
}




echo 'Sonda';
