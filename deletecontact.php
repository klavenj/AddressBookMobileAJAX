
<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
	<!-- Bootstrap Framework -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	



	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<!-- Animate Css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<!-- Mobile JQuery -->
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body>

<?php
//including the database connection file
include_once("dbconfig.php");
 
 
if(isset($_POST['Submit'])) {    
    
    //grabs name values from the field
    $id = $_POST['id'];
		
            
        // // //insert data to database        
        // $sql = "INSERT INTO user_info(Firstname, Lastname, Jobtitle, Phone, Email, website) VALUES (:first_name, :last_name, :job_title, :phone_number, :email, :website)";
       

         $sql = "DELETE FROM user_info WHERE ID = :id ";




        $query = $DBcon->prepare($sql);
        $query->bindparam(':id', $id);
       	$query->execute();
        
        // // Alternative to above bindparam and execute
        // $query->execute(array(':first_name' => $fname, ':last_name' => $lname, ':job_title' => $job, ':phone_number' => $number, ':email' => $email, ':website' => $web));


           
 		 // //display success message
        echo '<div class="container">
        	  	<div class="row">
        	  	  <div class="col-sm-6 offset-md-3">
		        	  <div class="card card-success-custom">
		        		<h1>Success!</h1>
		        		<p class="alerticon"><i class="fa fa-check"></i></p>
		        		<p>You have successfully deleted this contact.</p>
		        		<a href="index.php">Go Back</a>
		      		 </div>
      		 	</div>
      		 </div>
      		</div>';


	
		}
?>
	
<!-- Jquery CDN -->
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://use.fontawesome.com/9e0507d25d.js"></script>

<!-- Custom JS -->
<script src="js/app.js" type="text/javascript"></script>

</body>

</html>




