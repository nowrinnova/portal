<?php
require_once('../controllers/pageAccess.php');
require_once('../model/adminModel.php');
$currentUser = userinfo($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">

<body>
    <div class="header">
        <div class="topnav">
            <div class="nav-item">
                <a id="logo" href="../index.php">PORTAL</a>
                <div class="vl"></div>
                <a href="#contact">FINANCIANLS</a>
                <a href="#contact">STUFF MANAGEMENTS</a>
            </div>
            <div class="nav-item">
                <p id="welcome">WELCOME </p><a id="profile-link" href="adminProfile.php"><?=strtoupper($currentUser['l_name'])?>, <?=strtoupper($currentUser['f_name'])?></a>
                <a href="">SETTING</a>
                <a href="../controllers/logout.php">LOGOUT</a>
            </div>
        </div>
    </div>
</body>

</html>