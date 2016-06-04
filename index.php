<html>
<head>
<!--Index page to add Mover -->
<title>mover</title>
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
<div class="container">
  <div id="result"></div>
<form id="addMoverForm" class="form">
	<h2>Add Mover</h2>
	<div class="form-group">
      <label for="mPhone">Phone:</label>
      <input type="phone" class="form-control" name="m_Phone" id="m_Phone" placeholder="Phone Number" required/>
    </div>
    <div class="form-group">
      <label for="m_Fname">First Name:</label>
      <input type="text"  class="form-control" name="mFname" id="mFname" placeholder="First Name" required/>
    </div>
	<div class="form-group">
      <label for="m_Lname">Last Name:</label>
      <input type="text" class="form-control" name="mLname" id="mLname" placeholder="Last Name" required/>
    </div>
	<div style="text-align:center" class="form-group">
	<button type="submit"  value="submit" class="primaryButton">create </button>
	</div>
  </form>
  

</div>
</body>
</html>
