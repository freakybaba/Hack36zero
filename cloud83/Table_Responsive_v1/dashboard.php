<?php
    session_start();
   $db=mysqli_connect("localhost","root","","ngodb");
   $sql = "SELECT * FROM donor";
   $result = mysqli_query($db,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">OrganizationName</th>
								<th class="column2">Address</th>
								<th class="column3">Email</th>
								<th class="column4">Phone</th>
								<th class="column5">Food Type</th>
							</tr>
						</thead>
						<tbody>
							  <?php

							    if (mysqli_num_rows($result) > 0) 
								    {
								     while($row = mysqli_fetch_assoc($result)) {
								        // echo "id: " . $row["name"]. " - Name: " . $row["address"]. " " . $row["email"]. "<br>";

								        echo "<tr><td>".$row["name"]."</td><td>".$row["address"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["type"]."</td></tr>";

								    }
								    } else {
								    echo "0 results";}
							    
								?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>