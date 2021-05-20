 <?php include_once 'head.php'; ?>	

<div class="signin_img">
 <div class="container h-80">
  <div class="row align-items-center h-100">
    <div class="col-3 mx-auto">
        <div class="text-center">
             <h1>Sign In</h1>

            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="logic/auth.php" method="post">
                
             <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="login" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="pwd" class="form-control" placeholder="password">
					</div>
					<button class="btn btn-lg btn-dark btn-block btn-signin" type="submit" name="button">Sign In</button>    
                   
              
					
                
            </form><!-- /form -->
            

        </div><!--text-center-->
			<div class="d-flex justify-content-center links text-white">
				Don't have an account?<a class="text-warning" href="/signup.php">Sign Up</a>
			</div>
    </div>
</div>


</div><!-- container-->

</div><!-- a_signin_img -->

