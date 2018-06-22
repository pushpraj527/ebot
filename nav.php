<!--Navigation-->
<nav role="navigation" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand brandName" href="/ebot/" style="border-right: 1px solid #909aa6;"><strong>E-BOT</strong></a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#headerMenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="headerMenu">
            <ul class="nav navbar-nav navbar-right">
                <?php
                    /*if($title != ""){
                        echo '<li class="active"><a href="index.php"><span class="fa fa-home"></span> Home</a></li>';
                    }*/
                ?>
                 <li class="active"><a href="/ebot/"><span class="fa fa-home"></span> Home</a></li>
                <!--<li><a href="about-us.php"><span class="fa fa-book" aria-hidden="true"></span> About Us</a></li>-->
                <li><a href="#"><span class="fa fa-plane" aria-hidden="true"></span> About</a></li>
                <li><a href="#contactForm"><span class="fa fa-envelope" aria-hidden="true"></span> Contact Us</a></li>
                <!-- <li><a href="#"><span class="fa fa-users" aria-hidden="true"></span> About Us</a></li> -->
                <li><a href="user-login.php"><span class="fa fa-sign-in" aria-hidden="true"></span> Login</a></li>
                <li><a href="registrationForm.php"><span class="fa fa-users" aria-hidden="true"></span> Signup</a></li>
                <li class="hidden-md hidden-lg hidden-sm"><a href="mailto:"><span class="fa fa-envelope" aria-hidden="true"></span> Mail us at </a></li>
                <li class="hidden-md hidden-lg hidden-sm"><a href="tel:"><span class="fa fa-phone" aria-hidden="true"></span> Call us on </a></li>
            </ul>
        </div>
    </div>
</nav>
<div style="margin-top: 75px;"></div>