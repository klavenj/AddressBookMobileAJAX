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
			 <form action="deletecontact.php" method="post">
				   <div class="input-group">
				   		<input type="hidden" class="form-control form-control-custom" id="id" name="id" value="<?php echo $row['ID']; ?>" placeholder="ID" >
						<button type="button" data-dismiss="modal" class="btn btn-primary btn-lg btn-block btn-custom btn-color">Cancel</button>
						<button type="submit" name="Submit" class="btn btn-primary btn-lg btn-block btn-custom btn-color">Delete</button>	
					</div>
			 </form>


 <?php    
}
