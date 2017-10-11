<?php
  
 //This will grab the database login information  
 require_once 'dbconfig.php';
 
 //this will grab the data needed for the database, in this case id from index.php
 if (isset($_REQUEST['id'])) {
   
 $id = intval($_REQUEST['id']);
 $query = "SELECT * FROM user_info WHERE ID=:id";
 $stmt = $DBcon->prepare( $query );
 $stmt->execute(array(':id'=>$id));
 $row=$stmt->fetch(PDO::FETCH_ASSOC);
 extract($row);
 
 ?>
 
 			 <form action="updatecontact.php" method="post" name="edit" enctype="multipart/form-data">
				<div class="form-group custom-form">

 					<div class="input-group">

 					<input type="hidden" class="form-control form-control-custom" id="id" name="id" value="<?php echo $row['ID']; ?>" placeholder="ID" >

						<input type="text" class="form-control form-control-custom" id="firstName" name="first_name" value="<?php echo $row['Firstname']; ?>" placeholder="First Name" >
					</div>
					<div class="input-group">
						<input type="text" class="form-control form-control-custom" id="lastName" name="last_name" value="<?php echo $row['Lastname']; ?>" placeholder="Last Name">
					</div>
					<div class="input-group">
						<input type="text" class="form-control form-control-custom" id="jobTitle" name="job_title" value="<?php echo $row['Jobtitle']; ?>" placeholder="Job Title">
					</div>
					<div class="input-group">
						<input type="email" class="form-control form-control-custom" id="email" name="email"  value="<?php echo $row['Email']; ?>" placeholder="Email">
					</div>
					<div class="input-group">
						<input type="tel" class="form-control form-control-custom" id="phoneNumber" name="phone_number"  value="<?php echo $row['Phone']; ?>" placeholder="Phone">
					</div>
					<div class="input-group">
						<input type="text" class="form-control form-control-custom" id="website" name="website" value="<?php echo $row['website'];?>" placeholder="Website">
					</div>

						<div class="input-group input-group-file">
								
									<!-- <label>Select Image</label>
									<input class="form-control form-control-custom form-control-img" type="file" name="user_image" accept="image/*" />
 -->								

 								          <label class="input-group-btn">
							                    <span class="btn btn-primary btn-color">
							                        Browse&hellip; <input type="file" style="display: none;" name="user_image" accept="image/*">
							                    </span>
							              </label>
							               <input type="text" class="form-control input-file-custom" readonly>

							</div>
					
					<div class="input-group">

							   <button type="submit" data-dismiss="modal" class="btn btn-primary btn-lg btn-block btn-custom btn-color">Cancel</button>
							   <button type="submit" name="Submit" class="btn btn-primary btn-lg btn-block btn-custom editBtn btn-color">Save</button>
							     
					</div>

				  </div>	
				</form>	 

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


 <?php    
}
