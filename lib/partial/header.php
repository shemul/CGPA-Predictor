<?php 
  session_start();
?>
<?php
  // Start the session
  
  if(!isset($_SESSION['login_user'])) {
    header('location:login.php');
  }

?>

<!DOCTYPE html>
<html>
<head>
<?php if (basename($_SERVER['PHP_SELF']) == 'dashboard.php') echo '<title>Dashboard</title>' ?>
<?php if (basename($_SERVER['PHP_SELF']) == 'trained.php') echo '<title>Trained Data</title>' ?>
<?php if (basename($_SERVER['PHP_SELF']) == 'test.php') echo '<title>Current Student Data</title>' ?>
<?php if (basename($_SERVER['PHP_SELF']) == 'focus.php') echo '<title>Focus</title>' ?>

<?php if (basename($_SERVER['PHP_SELF']) == 'support.php') echo '<title>Help</title>' ?>
<?php if (basename($_SERVER['PHP_SELF']) == 'profile.php') echo '<title>Profile</title>' ?>
<link rel="stylesheet" type="text/css" href="lib/css/dashboard.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,400" rel="stylesheet">

</head>
<body>

<div class="container">

<header>
       <ul class="main_nav">


        <li class="main_nav_l"><a <?php if (basename($_SERVER['PHP_SELF']) == 'dashboard.php') echo 'class="active"' ?> href="dashboard.php">DASHBOARD</a></li>
        <li><a <?php if (basename($_SERVER['PHP_SELF']) == 'trained.php') echo 'class="active"' ?> href="trained.php">TRAINED DATA</a></li>
        <li><a <?php if (basename($_SERVER['PHP_SELF']) == 'test.php') echo 'class="active"' ?> href="test.php">CURRENT DATA</a></li>
        <li><a <?php if (basename($_SERVER['PHP_SELF']) == 'focus.php') echo 'class="active"' ?> href="focus.php">FOCUS</a></li>

        <li><a <?php if (basename($_SERVER['PHP_SELF']) == 'support.php') echo 'class="active"' ?> href="support.php">HELP</a></li>
        <li class="dropdown" style="float:right ;"><a href="#" class="dropbtn" style="background-color : #4CAF50 ; color:White" ><?php echo $_SESSION['login_user']; ?></a>

          <div class="dropdown-content">
            <a href="profile.php">PROFILE</a>
            <a href="handler/logout.php">LOGOUT</a>
          </div>

        </li>
        <li style="float:right ;"><input type="text" id="search" placeholder="Type and enter" name=""></li>
        <li style="float:right ;">
          
          <select name="filter" id="filter_bar">
            <option value="id">ID</option>
            <option value="eng">English</option>
            <option value="mat">Math</option>
            <option value="pl1">PL1</option>
            <option value="pl2">PL2</option>
            <option value="alg">Algo</option>
          </select>

        </li>


    </ul>
    
</header>