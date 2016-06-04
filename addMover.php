<?php
/**
 * Created by PhpStorm.
 * User: rajan
 * Date: 6/2/2016
 * Time: 8:12 PM
 */
include("DBConnection.php");
 // getting connection Object
 
	
	$mover = new Movers($_POST["m_Phone"],$_POST["mFname"],$_POST["mLname"]);
	$mover->addMover($_POST["m_Phone"],$_POST["mFname"],$_POST["mLname"]);
	
	//$conn = new DBConnection();
	//$connectionObj=$conn->connection();
	//Movers Class 
	class Movers{
		//Mover Details 
		private $m_Phone;
		private $m_Fname; 
		private $m_Lname; 
		private $conn;
		//constructor to intilize variables
		public function __construct($Phone, $Fname, $Lname) {
        		$this->m_Phone = $Phone;
			$this->m_Fname = $Fname;
			$this->m_Lname = $Lname;
			$this->conn = new DBConnection();
		}
		//function which add new Mover into Database
		function addMover($Phone, $Fname, $Lname){
						
			try{
			$connectionObj=$this->conn->connection();
			
			$nRows = $connectionObj->query("SELECT MoverPhone FROM movers where MoverPhone='$Phone'")->fetchColumn();
			
			if($nRows == NULL){
			//database Query to insert into database table movers
			$sql = "INSERT INTO movers (MoverPhone,FirstName,LastName) values('$Phone','$Fname','$Lname')";
			$connectionObj->exec($sql);
			echo "Mover added Successfully";
			}
			else{
				echo "Mover alredy  present with PhoneNo";
			}
		}
		catch(PDOException $e){
			echo "Connection failed: " . $e->getMessage();
		}			
	}
	
	
	
	}
?>
