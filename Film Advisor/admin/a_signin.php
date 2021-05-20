 <?php include_once 'a_head.php'; ?>	



<div class="a_signin_img">
  <div class="container h-80">
    <div class="row align-items-center h-100">
       <div class="col-3 mx-auto">
          <div class="text-center">
              <img id="profile-img" class="rounded-circle profile-img-card" src="https://i.imgur.com/6b6psnA.png" height="180" width="180">
                 <p id="profile-name" class="profile-name-card"></p>
                 
                 
            <form class="form-signin" action="a_auth.php" method="post">
                
                <input type="text" name="login" class="form-control form-group" placeholder="login" required="" autofocus="">
                <input type="password" name="pwd" class="form-control form-group" placeholder="password" required="" autofocus="">
                <button class="btn btn-lg btn-dark btn-block btn-signin" type="submit" name="button">Login</button>
                
            </form><!-- /form -->
        </div>
      </div>
    </div>
</div><!-- container -->	

</div><!-- a_signin_img -->

