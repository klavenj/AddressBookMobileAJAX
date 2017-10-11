<?php

 require_once 'dbconfig.php';




 $query = "SELECT * FROM user_info ORDER BY Firstname";
 $stmt = $DBcon->prepare( $query );
 $stmt->execute();


  while($row=$stmt->fetch(PDO::FETCH_ASSOC)){

 ?>


<div class="list-group names">
	 <ul class="list-group">
			<li class="list-group-item name">
				<span class="badge badge-delete"  id="getUserDelete" data-toggle="modal" data-id="<?php echo $row['ID']; ?>" data-target="#deleteContact">
					<i class="fa fa-times"></i>
				</span>
				<span class="badge badge-edit"  id="getUserEdit" data-id="<?php echo $row['ID'];?>" data-toggle="modal" data-target="#EditContact">
					<i class="fa fa-pencil-square-o"></i>
				</span>
				<span class="badge badge-info"  id="getUser" data-toggle="modal" data-id="<?php echo $row['ID']; ?>" data-target="#profile">
					<i class="fa fa-info"></i>
				</span>
				<p>
					<?php echo $row['Firstname']."&nbsp;".$row['Lastname']; ?>
				</p>
			</li>

			<?php


				}

          	?>
       </ul>
</div>
