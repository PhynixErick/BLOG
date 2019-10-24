<?php include("header.php");?>
<body>
    <div class="background col-12">
        <div class="login-panel">
            
                <form action="submit.php" method="post" name="login_form" onsubmbit="return validateForm()" id="login_form" autocomplete="off">
                    <div class="fields-panel col-12">

                        <div class="complete-field">
                            <div class="icon-box col-2">
                                <i class='fas fa-user-circle' style='font-size:18px; color: white'></i>
                            </div>
                            <input class="field" type="text" required placeholder="User" class="field" style="" type="text" name="username">
                        </div>
                        <div class="complete-field col-12">
                            <div class="icon-box col-2">
                                <i class='fas fa-key' style='font-size:15px; color: white'></i>
                           </div>
                           <input class="field" type="password" required placeholder="Password" class="field col-12" type="text" name="password">
                        </div>
                        <!--<input class="field" type="password" placeholder="Password" class="field col-12" type="text" name="password">
                         <div class="icon-box">
                            <i class='fas fa-key' style='font-size:15px; color: white'></i>
                         </div>-->
                    </div>
                    <input id="loginSubmit" class="button" type="submit" value="Log In">
                </form> 
            
            <div class="mini-footer">
            </div>
        </div>
    </div>
    <div id="simpleModal" class="modal">
        <div class="modal-content">   
            <div class="modal-header">
                <span id="closeBtn">&times;</span>
            </div>
            <div class="modal-mid">
                 <!--<i class="fas fa-exclamation-circle mid-icon"></i>-->
                 <i class="far fa-frown-open mid-icon"></i>
                 <p>Sus datos no coinciden con nuestros registros, intente con otros datos.</p>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>    
</body>
<script type="text/javascript" src='js/loginFunctions.js'></script>
<?php include("footer.php");?>