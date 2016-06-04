 <?php
class DBConnection{
	
public $servername = "localhost";
public $username = "root";
public $password = "";

function connection(){
	try {
		$conn = new PDO("mysql:host=$this->servername;dbname=movercompany", $this->username, $this->password);
		// set the PDO error mode to exception
		//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Connected successfully";
    }
	catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
 return $conn;
 }
}
?>