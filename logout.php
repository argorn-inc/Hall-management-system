<?php 

//logout button


if (isset($_POST['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header('Location:login.php');
}
 ?>
