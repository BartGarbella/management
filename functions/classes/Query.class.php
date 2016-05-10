<?php 

class Query extends DatabaseConnect {

    private $_validation;
	private $_db;
    private $_pass;
    private $_user;
    
    function __construct() {
        $this->_db = $this->connection();
    }

	

	// Reviece string-Payload from Ajax POST and decode into array	    
    public function decode($string) {
    	$data = array();

    	parse_str($string, $data);

    	$this->insert($data);
    }





    public function select() {

        $args= func_get_args();

        $this->_user = $args[1]['username'];
        $this->_pass = $args[1]['password'];


        $selectQuery = "SELECT * FROM ".$args[0]." WHERE username='".$args[1]['username']."'";


    	try {
        	$stmt = $this->_db->prepare($selectQuery);
        	$stmt->execute();
        	$result = $stmt->fetch(PDO::FETCH_ASSOC);	
    	} catch (PDOException $e) {
    		print "Error:" . $e->getMessage() . "<br/>";
            die();	
    	}
        $this->_db = NULL;
        $this->_validation = LoginCheck::validate($result,$this->_user,$this->_pass); 
        
        return $this->_validation;
        
    }


    public function update($id) {

    }



    private function insert($data) {




        $insertQuery = 'INSERT INTO costs 
        ('.implode(",",array_keys($data)).') 
        VALUES ('.implode(",",array_fill(0,count($data),"?")).')';



    	try {
            $stmt = $this->_db->prepare($insertQuery);
            $stmt->execute(array_values($data));
            $this->_db = NULL;
		} catch (PDOException $e) {
    		print "Error: ".$e->getMessage() . "<br/>";
            die();
    	}

    }
}