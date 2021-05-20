<?php if(isset($_SESSION['user_password']) ): ?>

  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom box-shadow">
    <div class="my-0 mr-md-auto">
      	<img src="/images/logo.png" width="50px">
    </div>
      <nav class="my-2 my-md-0 mr-md-3">
         <a class="p-2 text-white" href="a_index.php">Main</a>
         <a class="p-2 text-white" href="a_movies.php">Movies</a>
         <a class="p-2 text-white" href="control.php">Control panel</a>
      </nav>
         <a class="btn btn-secondary" href="../logic/logout.php">Exit</a>
    </div>
    
    <?php else: ?>
	   <span class="text-white">You don't have permission
	   </span>
	<?php endif; ?>