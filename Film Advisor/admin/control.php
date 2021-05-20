<?php require_once '../logic/db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once 'a_head.php'; ?>
</head>
<body class="mov_img" style="width: 100%; height: 100%;">
  <?php include_once 'a_header.php'; ?>

  <?php if( isset($_SESSION['user_password']) ): ?>

 <div class="container d-flex justify-content-center">
    <div class="col-3">
        <p id="profile-name" class="profile-name-card"></p>
        <h1 class="text-white text-uppercase">Add film</h1>
   
   <form name="newMovie">
    
      <div class="d-flex flex-wrap">        
        <label class="text-white">Title film</label>
        <input type="text" name="newMovie__title" value=""class="form-control form-group"><br>
        <label class="text-white">Duration</label>
        <input type="number" name="newMovie__duration" value="" class="form-control form-group">
        <label class="text-white">Genres</label><br>
        <select class="form-control form-group"  name="newMovie__genres[]" multiple>
        <?php include '../logic/get_genres.php'; ?>
        </select>
        
      </div><br>
      
      <button class="btn btn-lg btn-dark btn-block mb-5" type="submit">Submit</button>
                
       </form><!-- /form -->
   </div><!--col-3-->
</div><!-- container -->	










  <?php else: ?>
    <?php include_once 'not_auth.php'; ?>
  <?php endif; ?>

</body>
</html>