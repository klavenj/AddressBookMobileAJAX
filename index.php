<!-- Image Validation -->



<!DOCTYPE html>
<html>
<head>
	<title>Address Book</title>

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


	<!-- Modals -->

	<!--Profile-->
 	
<div class="modal slideInDown" id="profile" tabindex="-1" role="dialog" aria-labelledby="ProfileCard">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-content-custom">
    	<div class="modal-header header-custom">
    		<button type="button" class="close close-custom" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    	</div>
	      <div class="modal-body">
	       		
	       		<!-- ajax loader -->
          		<!--  <img src="ajax-loader.gif"> -->
	       	    <!--  Content -->
	       		
	     <div id="dynamic-content">	<!--Dynamic content will be placed inside using ajax-->
<!-- 		       		<div class="card-block">
				  		<h3 class="card-title">
					   		Klaven Jones
					   	</h3>
					   <p class="card-text">
					  		Fullstack Developer
					   </p>
					  </div>
					  <ul class="list-group list-group-flush">
					    <li class="list-group-item"><span>Phone Number: </span> 555-555-5555</li>
					    <li class="list-group-item"><span>Email: </span> Klaven@email.com</li>
					  </ul>	 -->
		</div> 
				<!--   <div class="btn-group">
				  	<button type="button" data-dismiss="modal" data-toggle="modal" data-target="#EditContact" class="btn btn-primary btn-sm">Edit</button>
				  	<button type="button" class="btn btn-primary btn-sm btn-delete">Delete</button>
				  </div> -->
	       			
	      </div> 
      </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- add new modal -->
<div class="modal slideInUp" id="addContact" tabindex="-1" role="dialog" aria-labelledby="addUser">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-content-custom">
    	<div class="modal-header header-custom">
    		<button type="button" class="close close-custom" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    	</div>
	      <div class="modal-body">
	       	<div class="card card-custom">
	       		<h3 class="card-title card-title-delete">Add New Contact</h3>			
	       		
	       		<form action="addcontactandupload.php" method="post" name="" enctype="multipart/form-data">
						
						<div class="form-group custom-form">

						
							<div class="input-group">
								<input type="text" class="form-control form-control-custom" id="firstName" name="first_name" placeholder="First Name" >
							</div>
							<div class="input-group">
								<input type="text" class="form-control form-control-custom" id="lastName" name="last_name" placeholder="Last Name">
							</div>
							<div class="input-group">
								<input type="text" class="form-control form-control-custom" id="jobTitle" name="job_title" placeholder="Job Title">
							</div>
							<div class="input-group">
								<input type="email" class="form-control form-control-custom" id="email" name="email" placeholder="Email">
							</div>
							<div class="input-group">
								<input type="tel" class="form-control form-control-custom" id="phoneNumber" name="phone_number" placeholder="Phone">
							</div>
							<div class="input-group">
								<input type="text" class="form-control form-control-custom" id="website" name="website" placeholder="Website">
							</div>
							<div class="input-group input-group-file">
								
									<!-- <label>Select Image</label>
									<input class="form-control form-control-custom form-control-img" type="file" name="user_image" accept="image/*" />
 -->								

 								          <label class="input-group-btn">
							                    <span class="btn btn-primary">
							                        Browse&hellip; <input type="file" style="display: none;" name="user_image" accept="image/*">
							                    </span>
							              </label>
							               <input type="text" class="form-control input-file-custom" readonly>

							</div>

							<div class="input-group">
								
								<button type="button" data-dismiss="modal" class="btn btn-primary btn-lg btn-block btn-custom">Cancel</button>
								<button type="submit" name="Submit" class="btn btn-primary btn-lg btn-block btn-custom">Save</button>	
	

							</div>

						</div>	
					</form>	 
	       	</div>	
	      </div> 
      </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal zoomIn" id="deleteContact" tabindex="-1" role="dialog" aria-labelledby="deleteUser">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-custom-position modal-content-custom">
    	<div class="modal-header header-custom">
    		<button type="button" class="close close-custom" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    	</div>
	      <div class="modal-body">
	       
	       	<div class="card card-custom">
	       		
	       		<h3 class="card-title card-title-delete">Delete Contact</h3>			
		        
		        <p>Are you sure you want to delete this contact?</p>
		    	
		        <div id="dynamic-content-delete">	
			    	<!-- <form action="deletecontact.php" method="post">
				    	<div class="input-group">
							<button type="button" data-dismiss="modal" class="btn btn-primary btn-lg btn-block btn-custom">Cancel</button>
							<button type="submit" name="Submit" class="btn btn-primary btn-lg btn-block btn-custom">Delete</button>	
						</div>
					</form> -->
				</div>
	       	</div>	
	      </div> 
      </div><!-- /.modal-content -->
  </div> <!-- /.modal-dialog -->
</div> <!-- /.modal-->

			








<!-- edit modal -->
<div class="modal fadeIn" id="EditContact" tabindex="-1" role="dialog" aria-labelledby="EditUser">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-content-custom">
    	<div class="modal-header header-custom">
    		<button type="button" class="close close-custom" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    	</div>
	      <div class="modal-body">
	       	<div class="card card-custom">
	       		<h3 class="card-title card-title-delete">Edit Contact</h3>
	       			<div id="dynamic-content-form">			
	       			<!-- <form action="updatecontact.php" method="post" name="">
						<div class="form-group custom-form"> -->
							
							
							
							

<!-- 
							<div class="input-group">
								<input type="text" class="form-control form-control-custom" id="firstName" placeholder="First Name">
							</div>
							<div class="input-group">
								<input type="text" class="form-control form-control-custom" id="lastName" placeholder="Last Name">
							</div>
							<div class="input-group">
								<input type="text" class="form-control form-control-custom" id="jobTitle" placeholder="Job Title">
							</div>
							<div class="input-group">
								<input type="email" class="form-control form-control-custom" id="email" placeholder="Email">
							</div>
							<div class="input-group">
								<input type="tel" class="form-control form-control-custom" id="phoneNumber" placeholder="Phone">
							</div>
							<div class="input-group">
								<input type="text" class="form-control form-control-custom" id="website" placeholder="Website">
							</div> -->
							<!-- div class="input-group">

							    
								
								<button type="submit" data-dismiss="modal" class="btn btn-primary btn-lg btn-block btn-custom">Cancel</button>
								
								<button type="submit" name="Submit" class="btn btn-primary btn-lg btn-block btn-custom">Save</button>
							     
							</div>
 -->
						</div>	
					</form>	 

			    </div>
	       	</div>	
	      </div> 
      </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->





	<!-- navbar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		
		<div class="container-fluid">
			<div class="row">
				
				<div class="col-sm-8 offset-sm-2" role="search">
			    	
			    	 <div class="input-group input-group-custom">
				   		 <input type="search" class="form-control custom-search" placeholder="Search" aria-describedby="basic-addon2">
		 				 <span class="input-group-btn">
	                        <button class="btn btn-info btn-color" type="button">
	                            <i class="glyphicon glyphicon-search"></i>
	                        </button>
	                    </span>
			    	</div>
			    
			    </div>
		
		  </div> <!-- Row end -->
		
		</div> <!-- Container end -->
	
	</nav> <!-- nav end -->
	

		<!-- Buttons -->

    <!-- add new button -->
	 
	 <button data-toggle="modal" data-target="#addContact" id="addNew" title="Add New"><i class="glyphicon glyphicon-plus"></i></button>


	 <!-- back to top button -->
	 <button id="upTop" title="To the Top"><i class="glyphicon glyphicon-chevron-up"></i></button>








		<section> 
			<div class="row">
				<div class="col-sm-12">
					<h1 class="title">Contact List</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="panel">
						<!-- <div class="panel-heading">A</div> -->
						<div class="panel-body">
							<div id="index-content">
							

							</div>
					 </div>	<!-- Panel body end -->
				 	</div> <!-- Panel End -->
				</div>
			</div> <!-- row end 	 -->
		</section> <!-- Section End -->





	<!-- Scripts -->


<!-- Jquery CDN -->
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://use.fontawesome.com/9e0507d25d.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="
sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script> -->
	
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> -->

<!-- Custom JS -->
<script src="js/app.js" type="text/javascript"></script>

<!-- AJAX index-->
<script type="text/javascript">
	$(document).ready(function(){

     $('#index-content').html(''); // leave this div blank
     // $('#modal-loader').show();      // load ajax loader on button click
 
     $.ajax({
          url: 'usertable.php',
          type: 'GET',
          data: "",
          dataType: 'html'
     })
     .done(function(data){
          console.log(data); 
          $('#index-content').html(''); // blank before load.
          $('#index-content').html(data); // load here
          $('#modal-loader').hide(); // hide loader  
     })
     .fail(function(){
          $('#index-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
          $('#modal-loader').hide();
     });

   
    });

</script>

<!-- AJAX get user-->
<script type="text/javascript">
	$(document).ready(function(){

    $(document).on('click', '#getUser', function(e){
  
     e.preventDefault();
  
     var uid = $(this).data('id'); // get id of clicked row
  
     $('#dynamic-content').html(''); // leave this div blank
     // $('#modal-loader').show();      // load ajax loader on button click
 
     $.ajax({
          url: 'getuser.php',
          type: 'POST',
          data: 'id='+uid,
          dataType: 'html'
     })
     .done(function(data){
          console.log(data); 
          $('#dynamic-content').html(''); // blank before load.
          $('#dynamic-content').html(data); // load here
          $('#modal-loader').hide(); // hide loader  
     })
     .fail(function(){
          $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
          $('#modal-loader').hide();
     });

    });
});
</script>

<!-- AJAX Edit-->
<script type="text/javascript">
	$(document).ready(function(){

    $(document).on('click', '#getUserEdit', function(e){
  
     e.preventDefault();
  
     var uid = $(this).data('id'); // get id of clicked row
  
     $('#dynamic-content-form').html(''); // leave this div blank
     // $('#modal-loader').show();      // load ajax loader on button click
 
     $.ajax({
          url: 'getuserEdit.php',
          type: 'POST',
          data: 'id='+uid,
          dataType: 'html'
     })
     .done(function(data){
          console.log(data); 
          $('#dynamic-content-form').html(''); // blank before load.
          $('#dynamic-content-form').html(data); // load here
          $('#modal-loader-form').hide(); // hide loader  
     })
     .fail(function(){
          $('#dynamic-content-form').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
          $('#modal-loader-form').hide();
     });

    });
});
</script>

<!-- AJAX Delete-->
<script type="text/javascript">
	$(document).ready(function(){

    $(document).on('click', '#getUserDelete', function(e){
  
     e.preventDefault();
  
     var uid = $(this).data('id'); // get id of clicked row
  
     $('#dynamic-content-delete').html(''); // leave this div blank
     // $('#modal-loader').show();      // load ajax loader on button click
 
     $.ajax({
          url: 'getuserDelete.php',
          type: 'POST',
          data: 'id='+uid,
          dataType: 'html'
     })
     .done(function(data){
          console.log(data); 
          $('#dynamic-content-delete').html(''); // blank before load.
          $('#dynamic-content-delete').html(data); // load here
          $('#modal-loader-form').hide(); // hide loader  
     })
     .fail(function(){
          $('#dynamic-content-delete').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
          $('#modal-loader-form').hide();
     });

    });
});
</script>

<script type="text/javascript">
	
$(function() {

  // We can attach the `fileselect` event to all file inputs on the page
  $(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
  });

  // We can watch for our custom `fileselect` event like this
  $(document).ready( function() {
      $(':file').on('fileselect', function(event, numFiles, label) {

          var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;

          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }

      });
  });
  
});


</script>





</body>
</html>