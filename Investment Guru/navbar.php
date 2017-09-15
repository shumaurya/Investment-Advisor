<?php require_once 'includes/navbar_inc.php'; ?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <div class="navbar-logo">
                <button id="btn_sidebar" type="button" class="navbar-toggle sidebar-toggle pull-left" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <img src="img/grid.svg">
                </button>               
                <a href="index.php" class="navbar-brand" id="brand"><i class="fa fa-line-chart fa-inverse fa-fw" aria-hidden="true"></i>&nbsp;&nbsp; INVESTMENT GURU</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="bs-navbar">
            <ul class="nav navbar-nav navbar-left">
                <li <?php if (basename($_SERVER['PHP_SELF']) == 'how_it_works.php') echo 'class="active"' ?>><a href="how_it_works.php"><i class="fa fa-tasks fa-icons" aria-hidden="true"></i>&nbsp;&nbsp;How it works</a></li>
                <li <?php if (basename($_SERVER['PHP_SELF']) == 'about_us.php') echo 'class="active"' ?>><a href="about_us.php"><i class="fa fa-info-circle fa-icons" aria-hidden="true"></i>&nbsp;&nbsp;About us</a></li>
            </ul>
            <?php  if(isset($_SESSION['loggedIN']) && $_SESSION['loggedIN'] == true) { ?>           
                <ul class="nav navbar-nav navbar-right">  
                    <li <?php if (basename($_SERVER['PHP_SELF']) == 'profile.php' || basename($_SERVER['PHP_SELF']) == 'dashboard.php' || basename($_SERVER['PHP_SELF']) == 'calculator.php' || basename($_SERVER['PHP_SELF']) == 'investment.php') echo 'class="active"' ?>><a href="profile.php"><i class="fa fa-home fa-icons" aria-hidden="true"></i>&nbsp;&nbsp;Home</a></li> 
                    <li><a href="login.php?logout='1'"><i class="fa fa-power-off fa-icons" aria-hidden="true"></i>&nbsp;&nbsp;Logout</a></li> 
                </ul>   
            <?php } else { ?>
                <ul class="nav navbar-nav navbar-right">
                    <li <?php if (basename($_SERVER['PHP_SELF']) == 'login.php') echo 'class="active"' ?>><a href="login.php" id="login-nav"><i class="fa fa-sign-in fa-icons" aria-hidden="true"></i>&nbsp;&nbsp;Login</a></li>
                    <li><a href="signup.php" type="button" class="btn btn-primary btn-sign" id="btn-signup"><span><i class="fa fa-user-circle-o fa-icons" aria-hidden="true"></i>&nbsp;&nbsp;Sign Up</span></a></li>
                </ul>
            <?php } ?>   
        </div>
    </div>
</nav>