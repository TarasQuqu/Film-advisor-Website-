<?php
require_once 'db.php';

$sql = 'SELECT movies.id, movies.title, movies.duration, GROUP_CONCAT(genres.genre SEPARATOR ", ") AS genres
FROM movies INNER JOIN movies_genres
ON movies.id = movies_genres.movie_id
INNER JOIN genres
ON movies_genres.genre_id = genres.id
GROUP BY movies.id, movies.title, movies.duration';

$result = $pdo->query($sql);

while( $movie = $result->fetch(PDO::FETCH_OBJ) ):
?>
  <?php if( isset($_SESSION['user_password']) ): ?>  
     
     <div class="card ml-md-3 mb-4" style="width: 20rem;">
        <img class="card-img-top" src="/images/a_signin.jpg">
       <div class="card-body">
                 <div class="movie__container" id=<?php echo 'movie_' . $movie->id; ?> data-movie-id=<?php echo $movie->id; ?>>
			     <h1 class="movie__title card-text"><?php echo $movie->title; ?></h1>
			     <h2 class="movie__genre"><?php echo $movie->genres; ?></h2>
			     <div class="movie__duration text-muted">Duration of film: <?php echo $movie->duration; ?> min</div>
                 
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <button type="button" class="btn btn-sm btn-outline-secondary movie__del">Delete</button>
           </div>
      </div>
  
  
  
   <?php elseif( isset($_SESSION['user_login']) ): ?> 
   
    <div class="card ml-md-3 mb-4" style="width: 20rem;">
        <img class="card-img-top" src="/images/a_signin.jpg">
       <div class="card-body">
                 <div class="movie__container" id=<?php echo 'movie_' . $movie->id; ?> data-movie-id=<?php echo $movie->id; ?>>
			     <h1 class="movie__title card-text"><?php echo $movie->title; ?></h1>
			     <h2 class="movie__genre"><?php echo $movie->genres; ?></h2>
			     <div class="movie__duration text-muted">Duration of film: <?php echo $movie->duration; ?> min</div>
                 
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <?php if( isset($_COOKIE['watched']) && array_key_exists($movie->id, $_COOKIE['watched']) ): ?>
                  <button class="movie__watched movie__watched_active">Watched</button>
                  <?php else: ?>
                  <button class="movie__watched">Unwatched</button>
                  <?php endif; ?>

               
           </div>
      </div>
  
       
    
    
    <?php endif; ?>
</div>   
 
<?php endwhile; ?>