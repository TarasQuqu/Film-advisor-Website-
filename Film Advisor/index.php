<?php require_once 'logic/db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once 'head.php'; ?>
</head>
<body class="mov_img" style="width: 100%; height: 100%;">
 
<?php include_once 'header.php'; ?>
  

<?php if( isset($_SESSION['user_login']) ): ?>

<div class="p-md-5 mb-4 text-white rounded">
  <div class="text-center px-0">
       
      <h1 class="display-4 fst-italic">Title of a longer featured blog post
      </h1>

      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      
      
    </div>
  </div>
  
  
  <div class="container">
		<h1 class="text-white pt-5 ">The last added film is:
		</h1>
		
		<?php include_once 'logic/last_movie.php'; ?> 
		
	<div class="pb-5"></div> 	    
  </div>
  

    <?php include_once 'footer.php'; ?>

  <?php else: ?>
    <?php include_once 'not_auth.php'; ?>
  <?php endif; ?>


</body>
</html>