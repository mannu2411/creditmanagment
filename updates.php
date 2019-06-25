<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
    </head>
    <body>
        <center><p><h2>The credits have been transfered</h2></p></center>
        
    <?php
     define('DB_SERVER', 'localhost');
     define('DB_USERNAME', 'id10056330_root');
     define('DB_PASSWORD', '12345');
     define('DB_DATABASE', 'id10056330_mysql');
     $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
     if($db)
       { 
           $id=$_GET['userid'];
           $id2=$_GET['userid2'];
           $credits=$_GET['credits'];
		$sql = "SELECT * FROM Employee";
        $ret = mysqli_query( $db,$sql  );
        while($row = mysqli_fetch_row($ret)) {
             if($row[0]==$id)
             {
                 $cred=$row[2];
             }
             if($row[0]==$id2)
             {
                 $cred2=$row[2];
             }
           }
          // echo $cred;
           //echo "<br/><br/><br/>";
           //echo $cred-$credits;
           $cred=$cred-$credits;
           $cred2=$cred2+$credits;
           $sql = "UPDATE Employee set Credits=$cred where Enroll=$id";
           $ret = mysqli_query( $db,$sql  );
           $sql = "UPDATE Employee set Credits=$cred2 where Enroll=$id2";
           $ret = mysqli_query( $db,$sql  );
           $sql = "SELECT * FROM Employee";
        $ret = mysqli_query( $db,$sql  );
        echo "<br/><table border=3dp class='table table-dark'><thread><tr><th scope='col'>Id</th><th scope='col'>NAME</th><th scope='col'>Credits</th></tr>";
        while($row = mysqli_fetch_row($ret)) {
              echo"<tr scope='row'><td>{$row[0]}</td><td class='user_name'>{$row[1]}</td><td>{$row[2]}</td></tr> ";
        }
        echo"</table>";
		}
		
	 ?>	
   <center>
		<br/>
	<button type="button" class="btn btn-lg btn-info"id="hhjjkk" topmargin="50dp">
   Go to Homepage</a>
   </button> </center>
</body>
<script>
		$("#hhjjkk").click(function(){
			console.log('button----------------------------------------------------')
			window.location.href="index.html"
		})
	</script>
	<style>
		.#hhjjkk
		{
			cursor: pointer;
		}
		</style>

</html>