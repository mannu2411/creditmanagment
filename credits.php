<?php $Credits = -1?>
<!DOCTYPE html>
<html class="no-js">
    <head>
            <title>All User</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
    
    
    </head>
    <body>
       <center>
           <br/><br/><br/><br/><br/><br/>
        <label><h2>Credits  :<h2></label><input type = "text" placeholder="Enter credits to transfer" name = "pass" class = "box" class='form-control form-control-lg'/><br/><br />
        <input type = "submit" id="sub" value = " Submit " name="submit" class='btn btn-sm btn-info'/><br />
</center>
        
    </body>
    <script>
        $("#sub").click(function(){
           
            console.log("MAnubhav")
		    var cred= $('.box').val()
            var id=<?php echo $_GET["userid"];?>;
			console.log(cred)
            window.location.href="transfer.php?userid="+id+"&credits="+cred
		})
	</script>
</html>