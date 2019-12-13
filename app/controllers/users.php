<?php
  ob_start();
  include(ROOT_PATH . '/app/database/db.php');
  include(ROOT_PATH . '/app/helpers/validateUser.php');

  $table = 'users';

  $admin_users = selectAll($table, ['admin' => 1]);
  $users = selectAll($table);

  $errors = array();

  $id = '';
  $username = '';
  $email = '';
  $password = '';
  $passwordConf = '';
  $admin = '';


  if (isset($_GET['admin']) && isset($_GET['a_id'])) {
    $admin = $_GET['admin'];
    $a_id = $_GET['a_id'];
    $count = update($table, $a_id, ['admin' => $admin]);
    $_SESSION['message'] = 'Admin status changed!';
    $_SESSION['type'] = 'alert-success';
    header('location: ' . BASE_URL . '/admin/users/index.php');
    exit();
  }


  function loginUser($user)
  {
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'You are now logged in';
    $_SESSION['type'] = 'alert-success';

    if ($_SESSION['admin']) {
      header('location: ' . BASE_URL . '/admin/dashboard.php');
    } else {
      header('location: ' . BASE_URL . '/index.php');
    }

    exit();
  }


  if (isset($_POST['signup-btn']) || isset($_POST['create-user'])) {
    $errors = validateUser($_POST);

    if (count($errors) === 0) {

        unset($_POST['signup-btn'], $_POST['passwordConf'], $_POST['create-user']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        if (isset($_POST['admin'])) {
          $_POST['admin'] = 1;
          $user_id = create($table, $_POST);
          $_SESSION['message'] = 'Admin user created sucessfully';
          $_SESSION['type'] = 'alert-success';
          header('location: ' . BASE_URL . '/admin/users/index.php');
          exit();

        } else {
          $_POST['admin'] = 0;
          $user_id = create($table, $_POST);
          $user = selectOne($table, ['id' => $user_id]);
          loginUser($user);
        }
        
    } else {
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $passwordConf = $_POST['passwordConf'];
      $admin = isset($_POST['admin']) ? 1 : 0;
    }

  }


  if (isset($_POST['update-user'])) {
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
      $id = $_POST['id'];
      unset($_POST['passwordConf'], $_POST['update-user'], $_POST['id']);
      $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

      $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;
      $count = update($table, $id, $_POST);
      $_SESSION['message'] = 'User updated';
      $_SESSION['type'] = 'alert-success';
      header('location: ' . BASE_URL . '/admin/users/index.php');
      exit();

    } else {
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $passwordConf = $_POST['passwordConf'];
      $admin = isset($_POST['admin']) ? 1 : 0;
    }
  }


  if (isset($_GET['id'])) {
    $user = selectOne($table, ['id' => $_GET['id']]);

    $id = $user['id'];
    $username = $user['username'];
    $email = $user['email'];
    $admin = isset($user['admin']) ? 1 : 0;
  }


  if (isset($_POST['login-btn'])) {
    $errors = validateLogin($_POST);

    if (count($errors) === 0) {
      $user = selectOne($table, ['username' => $_POST['username']]);

      if ($user && password_verify($_POST['password'], $user['password'])) {
        loginUser($user);
      } else {
        array_push($errors, 'Wrong username or password');
      }
    }
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
  }


  if (isset($_GET['delete_id'])) {
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = 'User deleted';
    $_SESSION['type'] = 'alert-success';
    header('location: ' . BASE_URL . '/admin/users/index.php');
    exit();
  }

  ob_end_clean();