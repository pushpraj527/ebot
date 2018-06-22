<?php
    include 'header.php';
    include 'body.php';
?>
<div class="container-fluid login-page" id="admin-login">
    <div class="login-container">
        <div class="form-name"><h2 style="color: #ffffff;"><strong>Administrative Login</strong></h2></div>
        <div class="login-logo center">
            <img class="login-logo-design" src="assets/media/images/logo/user.png">
        </div>
        <form class="form">
            <div class="row col-sm-offset-4 col-sm-4">
                <div class="input-group input-fields">
                    <label for="admin-username" class="sr-only">Username</label>
                    <span class="input-group-addon" style="border-top-left-radius: 4px; border-bottom-left-radius: 4px;"><i class="fa fa-user"></i> Username</span>
                    <input type="text" class="form-control" name="admin-username" id="admin-username" placeholder="Username">
                </div>
            </div>
            <div class="row col-sm-offset-4 col-sm-4">
                <div class="input-group input-fields">
                    <label for="admin-password" class="sr-only"> Password</label>
                    <span class="input-group-addon" style="border-top-left-radius: 4px; border-bottom-left-radius: 4px;"><i class="fa fa-lock"></i> Password&nbsp;</span>
                    <input type="password" class="form-control" name="admin-password" id="admin-password" placeholder="Password">
                </div>
            </div>
            <div class="row col-sm-offset-4 col-sm-4">
                <div class="btn-fields">
                    <button type="submit" class="btn btn-success custom-btn1"><i class="fa fa-sign-in"></i> Login</button>
                </div>
                <div class="btn-group btn-fields1">
                    <button type="reset" class="btn btn-primary custom-btn2"><i class="glyphicon glyphicon-erase"></i> Clear</button>
                    <button type="button" class="btn btn-danger custom-btn2"><i class="fa fa-question-circle"></i> Forgot Password</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
    include 'footer.php';
?>