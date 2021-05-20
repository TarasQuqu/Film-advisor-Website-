  <nav>
   <?php if(isset($_SESSION['user_login']) ): ?>	
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom box-shadow">
    	
     	<div class="my-0 mr-md-auto">
      	   <a href="index.php"><img src="/images/logo.png" width="50px"></a>
        </div>
        
     <nav class="my-2 my-md-0 mr-md-3">
          <a class="p-2 text-white" href="index.php">Main</a>
          <a class="p-2 text-white" href="movies.php">Movies</a>
     </nav>
          <a class="btn btn-secondary" href="../logic/logout.php">Exit</a>
  </div>
    
<?php else: ?>
          <a class="btn btn-secondary" href="signin.php">Sign in</a>
	      <a class="btn btn-secondary" href="signup.php">Sign up</a>
<?php endif; ?>	
	
