<?php
   
 require_once 'dbconfig.php';
 
 if (isset($_REQUEST['id'])) {
   
 $id = intval($_REQUEST['id']);
 $query = "SELECT * FROM user_info WHERE ID=:id";
 $stmt = $DBcon->prepare( $query );
 $stmt->execute(array(':id'=>$id));
 $row=$stmt->fetch(PDO::FETCH_ASSOC);
 extract($row);
 
 	$image = $row['photo'];
 	$image_src = "img/default-avatar.jpg";

 	if(empty($image)){
 		$image_src = "img/default-avatar.jpg";	 
 	}
 	else{
 		$image_src = "uploads/".$image;	 	
 	}
 		



	
	

 ?>
 	

 <div class="card card-custom">	
 	<div class="card-block card-img-header">
 		<img class="img-responsive img-circle img-custom" src='<?php echo $image_src;  ?>'>
 	</div>
 	<div class="card-block card-block-custom">
		<h3 class="card-title">
			<?php echo $row['Firstname']."&nbsp;".$row['Lastname']; ?>
		 </h3>
		<p class="card-text">
			<?php echo $row['Jobtitle']; ?>
		</p>
	</div>
	<ul class="list-group list-group-flush">
		<li class="list-group-item"><span><i class="fa fa-phone" aria-hidden="true"></i></span> <?php echo $row['Phone']; ?></li>
		<li class="list-group-item"><span><i class="fa fa-envelope" aria-hidden="true"></i></span> <?php echo $row['Email']; ?></li>
		
	</ul>	
 </div>

 <?php    

}
