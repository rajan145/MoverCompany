<?php
    include("DBConnection.php");
	$conn = new DBConnection();
	$connectionObj=$conn->connection();
	
	if(isset($_GET)){
		$crewNo=$_GET['crewNO'];
		$stmt=$connectionObj->prepare("SELECT m.FirstName,m.LastName,m.MoverPhone FROM movers m, crews c WHERE m.MoverPhone=c.MoverPhone AND c.CrewNo='$crewNo'"); 
		$stmt->execute();
		$row_count = $stmt->rowCount();
		echo "<h3>".$crewNo."  Details</h4>";
		echo "<h5> Number of Movers ".$row_count."</h4>";
	
		echo "<table class='table table-hover'><thead>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Phone</th>
				</thead>";
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		echo  '<tr><td>'.$row['FirstName'].'</td><td>'.$row['LastName'].'</td><td>'.$row['MoverPhone'].'</td></tr>';
		}
		
		echo '</table>';
	}
?>