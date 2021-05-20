?php require_once '../logic/db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once 'a_head.php'; ?>
</head>
<body>
  <?php include_once 'a_header.php'; ?>

  <?php if( isset($_SESSION['user_password']) ): ?>

    <h1>Добавить фильм</h1>
    <form name="newMovie">
      <label>Название фильма</label>
      <input type="text" name="newMovie__title" value="">
      <br>
      <label>Продолжительность фильма</label>
      <input type="number" name="newMovie__duration" value="">
      <br>
      <label>Жанры фильма</label>
      <select name="newMovie__genres[]" multiple>
        <?php include_once '../logic/get_genres.php'; ?>
      </select>
      <br>
      <button type="submit">Добавить</button>
    </form>

  <?php else: ?>
    <?php include_once 'not_auth.php'; ?>
  <?php endif; ?>


</body>
</html>