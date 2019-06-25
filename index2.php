<!DOCTYPE html>
 <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>All Users</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
	</head>
	<body>
		<center>
		    <p><h2>Select User</h2><p> 
	<?php
     define('DB_SERVER', 'localhost');
     define('DB_USERNAME', 'id10056330_root');
     define('DB_PASSWORD', '12345');
     define('DB_DATABASE', 'id10056330_mysql');
     $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
     if($db)
       { 
		$sql = "SELECT * FROM Employee";
        $retval = mysqli_query( $db,$sql  );
         echo "<table border=3dp class='table table-dark'><thread><tr><th scope='col'>Id</th><th scope='col'>NAME</th><th scope='col'>Credits</th></tr>";
        while($row = mysqli_fetch_row($retval)) {
              echo"<tr scope='row'><td>{$row[0]}</td><td class='user_name'>{$row[1]}</td><td>{$row[2]}</td></tr> ";
        }
		}
		
	 ?>	
	 
	 </center>
	<script>
		$('.user_name').click(function(){
			var id = $(this).parent().children()[0].innerHTML
			console.log($(this).parent().children().innerHTML)
			window.location.href="credits.php?userid="+id
		})
	</script>
	<style>
		.user_name
		{
			cursor: pointer;
		}
		</style>

	</body>
</html>
