<?php 
$active_page = basename($_SERVER['PHP_SELF'],".php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ETACOVDA - <?php echo ucfirst($active_page);?></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="./cat.svg">
<link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
    <!-- navbar  -->
    <div class="navba_r py-2">
        <div class="container navbar_item">
        <ul class="navbar_title">
            <li><a href="./"><img class="logo" src="./cat.svg" height="30px" alt=""></a></li>
            <li><a href="./">ETACOVDA</a></li>
        </ul>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
        <i class="fa-solid fa-bars-staggered"></i>
        </label>
        <ul class="navbar_menu">
            <li class="<?= ($active_page == 'index') ? 'active' : '';?>"><a href="./">Home</a></li>
            <li class="<?= ($active_page == 'about') ? 'active' : '';?>"><a href="./about.php">About</a></li>
            <li class="<?= ($active_page == 'contact') ? 'active' : '';?>"><a href="./contact.php">Contact</a></li>
        </ul>
        <ul class="navbar_button">
            <li class="<?= ($active_page == 'login') ? 'active' : '';?>"><a href="./login.php">Login</a></li>
            <li class="<?= ($active_page == 'signup') ? 'active' : '';?>"><a href="./signup.php">Signup</a></li>
        </ul>
        </div>
    </div>
    <!-- navbar  -->
