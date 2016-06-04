<html>
<head>
<title>viewmoves</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/addMoverAjax.js"></script>
   <link rel="stylesheet" href="css/stylecss.css">
 
</head>
<body>
  <?php include 'header.html';?>
  <div class="row">
	<div class="col-sm-1">
	</div>	
	<div class="col-sm-5"> 
	<h5> click on move to know movers details</h5>
		<table class='table table-hover' id="movesTable">
			<thead>
				<th field="moveNO">MoveNO</th>
				<th>TruckNo</th>
				<th>CrewNO</th>
			</thead>
		
		<?php 
		include("DBConnection.php");
		$conn = new DBConnection();
		$connectionObj=$conn->connection();
		$stmt=$connectionObj->prepare("SELECT MoveNO,truckNO,CrewNO FROM moves"); 
		$stmt->execute();
	
		//$row_count = $stmt->rowCount();
		//echo $row_count;
		
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		echo  '<tr><td>'.$row['MoveNO'].'</td><td>'.$row['truckNO'].'</td><td>'.$row['CrewNO'].'</td></tr>';
		}
		?>
		</table>
		
		<script>
		//Ajax GET request to get movers details
		 $('#movesTable').find('tr').click( function(){
				var crewNO=$(this).find('td:last').text();
				$.ajax({
					type:"GET",
					url: "crewDetails.php",//$("#addMoverForm").attr("action"),
					data: "crewNO="+crewNO,
					success: function(result){
					$("#crewDetails").html(result);
				    }
				});
		 });	
		
		</script>
	</div>
	<div class="col-sm-6"> 
	<div id="crewDetails"></div>
	</div>
  </div>
  
  
  
</body>
</html>
