<?php

$userprofile=$_SESSION['user_name'];
	 
	 if($userprofile==true){
?>
	  <div class="alert alert-success fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<p> You are logged in <b>Mr./Ms. <strong> <?php echo  $userprofile; ?> </strong> </p>
		</div>


<?php
		 

		 }
	
?>


       

