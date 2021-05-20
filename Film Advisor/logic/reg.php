<?php
require_once 'db.php';

$login = trim( $_POST['login'] );
$pwd = trim( $_POST['pwd'] );
$role = 0;
if( !empty($login) && !empty($pwd) ){

  // Проверка существования пользователя
  $sql_check = 'SELECT EXISTS( SELECT login FROM users WHERE login = :login )';
  $stmt_check = $pdo->prepare($sql_check);
  $stmt_check->execute( [':login' => $login] );

  if( $stmt_check->fetchColumn() ){
    die('User with this login already exists');
  }

  $pwd = password_hash($pwd, PASSWORD_DEFAULT);

  $sql = 'INSERT INTO users(login, password) VALUES(:login, :pwd)';
  $params = [ ':login' => $login, ':pwd' => $pwd];

  $stmt = $pdo->prepare($sql);
  $stmt->execute($params);

  echo 'You have successfully registered!';

}else{
  echo 'Please,enter empty fields';
}

?>
<br>
<a href="../signin.php">Sign in here</a>