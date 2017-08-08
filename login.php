<!DOCTYPE html>
<!-- This webpage contains the form to allow department staff the ability to fill out a form on behalf of someone who does not have an account -->
<?php
  session_start();
// if the user is logged in already, redirect them to the logged in homepage
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 'yes') {
  header('Location: ParkingPermits.php');
}
?>


                    <?php
                    // change what the user sees depending on their type
                              ini_set('display_errors',0);

                              if($_COOKIE['type'] == ''){
                                echo '<li><a href=" ">  </a></li>';
                              }
                              else if($_COOKIE['type'] == 'admin'){
                                echo '<li><a href=" ">Search Database</a></li>';
                              }else{
                                echo '<li><a href=" ">  </a></li>';

                              }
                              ?>


                            <?php
                                          if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 'yes') {
                                            echo '<a href="login.php">Logout</a>';

                                          } else  {
                                             echo '<li><a href="login.php">Login</a></li><li><a href="signup.php">Sign up</a></li>';
                                          }
                                        ?>
