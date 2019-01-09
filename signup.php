<?php
$title = 'Sign Up';
    include 'templates/header.php';
    include 'templates/navigation.php';

?>

<div class="container py-5">
        <div class="row centered-form">
        <div class=" col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    	<h3 class="panel-title">Please sign up  <small>It's free!</small></h3>
			 			</div>
			 		<div class="panel-body">
			    	<form action="includes/signup.inc.php" method="POST">
			    		<div class="row">
			    			<div class="col-xs-6 col-sm-6 col-md-6">
			    				<div class="form-group">
			        		        <input type="text" name="first" class="form-control input-sm" placeholder="First Name">
			    				</div>
			    			</div>
			    			<div class="col-xs-6 col-sm-6 col-md-6">
			    				<div class="form-group">
			    					<input type="text" name="last" class="form-control input-sm" placeholder="Last Name">
			    				</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" class="form-control input-sm" placeholder="Email Address">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="uid" class="form-control input-sm" placeholder="Username">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="pwd" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    			</div>

			    			<button type="submit" name="submit">Sign Up</button>

			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>



<?php
    include 'templates/footer.php';
  ?>
