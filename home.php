<?php
    
?>
<div class="container-fluid" id="botBox">
    <div class="container center chatboxcontainerhome well well-sm" style="background: rgba(162, 80, 229, 0.6); box-shadow: 0 0 8px 1px #1e1919; margin-top: 60px">
        <div class="">
            <br>
            <div class="botcontainerhome">
                <div class="row center">
                    <img class="animated fadeInRight" src="assets/media/images/logo/bot.png">
                </div>
                <div class="col-sm-offset-4 col-sm-4">
                    <h1 style="color: white;" class="animated swing center feedback">Hey there, How may I help You?</h1>
                    <textarea readOnly = true; id="response" cols="40" rows="4" style="resize: none; border: none; background: transparent; font-size: 16px; color: #000; font-weight: bold;" class="form-control"></textarea>
                    <div class="input-group add-on">
                        <input id="input" type="text" placeholder="Type here..." autocomplete="off" class="form-control" >
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="button" id="rec"><i class="fa fa-microphone"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </div>
</div>
