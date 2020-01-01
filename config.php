<?php
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MessManagement";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

class DbConfig 
{    
	private $_host = "localhost";
    private $_username = "root";
    private $_password = "";
    private $_database = "MessManagement";
    
    protected $conn;
    
    public function __construct()
    {
        if (!isset($this->conn)) {
            
            $this->conn = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
            
            if (!$this->conn) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
        
        return $this->conn;
    }
}

?>