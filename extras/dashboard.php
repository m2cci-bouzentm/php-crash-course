<?php
  session_start();


  
  session_destroy();

if(isset($_SESSION['username'])) {
  echo '<h1> Welcome ' . $_SESSION['username'] . '</h1>';
  echo '<a href="/php-crash-course/extras/logout.php"> Logout </a>';

}  else {
  echo '<h1> Welcome Guest </h1>';
  echo '<a href="/php-crash-course/13_sessions.php"> Home </a>';
}
?>