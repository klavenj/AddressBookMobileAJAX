
<!DOCTYPE html>
<html>
<head>
	<title>Add New</title>
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
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $job = $_POST['job_title'];
    $number = $_POST['phone_number'];
    $email = $_POST['email'];
    $web = $_POST['website'];

     $name = $_FILES['user_image']['name'];
     $target_dir = "uploads/";
     $target_file = $target_dir . basename($_FILES["user_image"]["name"]);


     // Select file type
     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

     // Valid file extensions
     $extensions_arr = array("jpg","jpeg","png","gif");



        
    // checking empty fields
    if(empty($fname) || empty($lname) ) {
                
        if(empty($fname)) {
            echo "<font color='red'>First Name field is empty.</font><br/>";
        }
        
        if(empty($lname)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }



        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
  
    } else { 
        // if all the fields are filled (not empty) 


        if( in_array($imageFileType, $extensions_arr) ){

             // // //insert data to database        
             $sql = "INSERT INTO user_info(Firstname, Lastname, Jobtitle, Phone, Email, website, photo) VALUES (:first_name, :last_name, :job_title, :phone_number, :email, :website, :user_image)";
       
                $query = $DBcon->prepare($sql);
                
                $query->bindparam(':first_name', $fname);
                $query->bindparam(':last_name', $lname);
                $query->bindparam(':job_title', $job);
                $query->bindparam(':phone_number', $number);
                $query->bindparam(':email', $email);
                $query->bindparam(':website', $web);
                $query->bindparam(':user_image', $name);
               
                $query->execute();

                  //display success message
                    echo '<div class="container">
                            <div class="row">
                              <div class="col-sm-6 offset-md-3">
                                  <div class="card card-success-custom">
                                    <h1>Success!</h1>
                                    <p class="alerticon"><i class="fa fa-check"></i></p>
                                    <p>You have successfully added a new contact with photo.</p>
                                    <a href="index.php">Go Back</a>
                                 </div>
                            </div>
                         </div>
                        </div>';




                // Upload file
                move_uploaded_file($_FILES['user_image']['tmp_name'],$target_dir.$name);

        }
        else
        {


                         // // //insert data to database        
                $sql = "INSERT INTO user_info(Firstname, Lastname, Jobtitle, Phone, Email, website) VALUES (:first_name, :last_name, :job_title, :phone_number, :email, :website)";
               

                // $sql = "INSERT INTO `user_info`(`Firstname`, `Lastname`, `Jobtitle`, `Phone`, `Email`, `website`) VALUES (:first_name, :last_name, :job_title, :phone_number, :email, :website)"




                $query = $DBcon->prepare($sql);
                        
                $query->bindparam(':first_name', $fname);
                $query->bindparam(':last_name', $lname);
                $query->bindparam(':job_title', $job);
                $query->bindparam(':phone_number', $number);
                $query->bindparam(':email', $email);
                $query->bindparam(':website', $web);
               
                $query->execute();


                  //display success message
                echo '<div class="container">
                        <div class="row">
                          <div class="col-sm-6 offset-md-3">
                              <div class="card card-success-custom">
                                <h1>Success!</h1>
                                <p class="alerticon"><i class="fa fa-check"></i></p>
                                <p>You have successfully added a new contact.</p>
                                <a href="index.php">Go Back</a>
                             </div>
                        </div>
                     </div>
                    </div>';
                        



        }
       
        // // Alternative to above bindparam and execute
        // $query->execute(array(':first_name' => $fname, ':last_name' => $lname, ':job_title' => $job, ':phone_number' => $number, ':email' => $email, ':website' => $web));
        
      


	 }
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




