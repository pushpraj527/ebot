<?php
    include 'header.php';
    include 'body.php';
?>
<div class="" style="background: ;">
    <br>
    <div class="col-sm-offset-2 col-sm-8">
        <div class="container-fluid well well-sm" style="background: rgba(0,0,0,0.9); color: white;">
        <div class="headerHead center"><h3><strong>Register</strong></h3><hr></div>
            <form class="form">
               <div class="row">
                   <div class="form-group">
                        <div class="col-sm-4">
                            <input class="form-control" type="text" name="" placeholder="Choose a username">
                       </div>
                       <div class="col-sm-4">
                            <input class="form-control" type="text" name="" placeholder="Please enter your firstname">
                       </div>
                       <div class="col-sm-4">
                            <input class="form-control" type="text" name="" placeholder="Please enter your lastname">
                       </div>
                   </div>
               </div>
               <br>
               <div class="row">
                   <div class="form-group">
                    <div class="col-sm-6">
                        <input class="form-control" type="password" name="" placeholder="Please choose a password">
                   </div>
                   <div class="col-sm-6">
                        <input class="form-control" type="password" name="" placeholder="Please confirm password">
                   </div>
               </div>
               </div>
                <br>
               <div class="row">
                   <div class="form-group">
                    <div class="col-sm-12">
                    <input class="form-control" type="email" name="" placeholder="Please enter your valid email">
                    </div>
               </div>
               </div>
               <br>
               <div class="row">
                   <div class="form-group">
                    <div class="col-sm-4">
                        <input class="form-control" type="number" max='12' min='10' name="" placeholder="Please enter your working contact number">
                    </div>
                    <div class="col-sm-4">
                        <input class="form-control" type="number" max='12' min='10' name="" placeholder="Please enter your alternative contact number">
                    </div>
                    <div class="col-sm-4">
                        <select class="form-control">
                            <option>Select any identity card</option>
                            <option>Driving Licence</option>
                        </select>
                    </div>
               </div>
               </div>
               <br>
               <div class="row">
                   <div class="col-sm-12">
                    <button type="button" class="btn btn-primary" style="width: 100%;">Register</button>
                </div>
               </div>
               <br>
        </form>
        </div>
    </div>
</div>
<?php
    include 'footer.php';
?>