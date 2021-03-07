<?php
	
session_start();
if(!isset($_SESSION['username']))
{
	header('location:login.php');
}


?>


	<html>

	<head>
		<title> Home page</title>
		<link rel="stylesheet" type="text/css" href="uform/style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	</head>

	<body>
		<div class="container">

			<h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
			
			<div class="row justify-content-center">
			<div class="row-6"></div>
			
			



			<?php

                

                $con = mysqli_connect("localhost","root","","uregister");

                $query = "SELECT * FROM utable";
                $result = mysqli_query($con, $query);

                echo "<table>
                        <thead >
                        <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Username</th>
                        </tr>
                        </thead>";

                $i = 1;

                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr><td>" . $i++ . "</td><td>" . $row['name'] . "</td><td>";
                }

                echo "</table>";
                ?>
                <a class="float-right" href="logout.php"> LOGOUT </a>

		</div>
		</div>
		

	</body>

	</html>
