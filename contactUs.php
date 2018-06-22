
    <h3>Contact Us: </h3>
    <form class="form center" method="post">
        <!--<div class="form-group contact-form"-->
            <label for="email-addr" class="sr-only">Email:</label>
            <input type="email" class="form-control" name="contactEmail" id="contactEmail" placeholder="Email" value="<?php echo (@($_POST["contactEmail"])) ?>">
        <!--</div>-->
        <!--<div class="form-group contact-form">-->
            <label for="message" class="sr-only">Email:</label>
            <textarea class="form-control" name="message" id="message" placeholder="Enter your Message..." rows="5"></textarea>
        <!--</div>-->
        <!--<div class="form-group contact-form">-->
            <input class="btn btn-primary btn-md" style="width: 100%;" type="submit" name="messageSubmit" id="messageSubmit" value="Send">
        <!--</div>-->
    </form>
<?php
    if(isset($_POST["messageSubmit"])){
        $error = "";
        $contactEmail = $_POST["contactEmail"];
        $msg = $_POST["message"];
        $date = date("d M, Y h : i : s A");
        $headers = "Content-type: text/html;";

    /*Error Messages*/
        $nomsg = "<p>Please enter your Message.</p>";
        $nocontactEmail = "<p>Please enter your email address</p>";
        $invalidcontactEmail = "<p>Please enter your valid email address</p>";
            if(!$msg){
                $error .= $nomsg;
            } else {
                $msg = filter_var($msg,FILTER_SANITIZE_STRING);
            }
            if(!$contactEmail){
                $error .= $nocontactEmail;
            }else{
                $contactEmail = filter_var($contactEmail,FILTER_SANITIZE_EMAIL);
                if(!filter_var($contactEmail,FILTER_VALIDATE_EMAIL)) {
                    $error .= $invalidemailid;
                }
            }
            if($error){
                $alertMessage = '<div class="alert alert-danger col-sm-offset-1 col-sm-10">' . $error . '</div>';
                echo $alertMessage;
            } else {
                $to = "swtnk.sbhm.r@gmail.com";
                $subject = "Contact Query";
                $content = "
                            <center><h2>Contact Details</h2><hr /></center>
                            <table>
                                <tr>
                                    <th>Date: </th>
                                    <td>$date</td>
                                </tr>
                                <tr>
                                    <th>Email id.:</th>
                                    <td>$contactEmail</td>
                                </tr>
                                <tr>
                                    <th>Message: </th>
                                    <td>$msg</td>
                                </tr>
                            </table>";
                if(mail($to,$subject,$content,$headers)) {
                    echo '<script>window.alert("Thankyou, We will contact you as soon as possible.");</script>';
                }else{
                    echo '<script>window.alert("Oops!, Something went wrong. Try after sometime.");</script>';
                }
            }
        
        unset($_POST);
        echo '<script>setTimeout(function(){window.location.href=window.location},2000);</script>';
    }
    
?>