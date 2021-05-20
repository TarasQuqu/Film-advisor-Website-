<?php
require_once '../logic/db.php';

$login = trim($_POST['login']);
$pwd = trim($_POST['pwd']);

if(!empty($login) && !empty($pwd) ){
  $sql = 'SELECT login, password FROM admins WHERE login = :login';
  $params = [':login' => $login];

  $stmt = $pdo->prepare($sql);
  $stmt->execute($params);

  $admin = $stmt->fetch(PDO::FETCH_OBJ);

  if($admin){
    if(password_verify($pwd,$admin->password) ){
      $_SESSION['user_password'] = $admin->password;
      header('Location:/admin/a_index.php');
    }
   else{
      echo 'Incorrect password or login';
    }

  }else{
      echo 'Incorrect password or login';
  }

}

else{
  echo 'Please,enter all fields';
}