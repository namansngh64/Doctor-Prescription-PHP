<?php
session_start();
if(isset($_COOKIE['admin'])){
    $_SESSION['admin']=$_COOKIE['admin'];
}
if(isset($_SESSION['admin'])){
    header("Location:main.php");
}

?>
<html>
    <head>
        <?php
            include("header/header.php");
        ?>
        <style>
            .login{
                margin:10% 35%;
                border: 1px darkviolet solid;
                border-radius: 10px;
                width: 30%;
                background-color: white;
            }
            form{
                padding: 10px;
            }
            .company{
                color: red;
                font-family: 'Orbitron' ,sans-serif;
                
            }
            .text{
                border: 0;
                width: 100%;
                border-bottom: 1px solid green;
            }
            .text:focus{
                outline: none;
            }
            body{
                background-color: #3e3e3e;
                background-image: url("../image/31709.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                
            }
            .blogin{
               border-radius: 10px;
                border: 1px solid grey;
            }

            
            
            @media only screen and (max-width: 650px){
                
                .login{
                    width: 50%;
                    margin: 10% 25%;
                    
                    
                }
            } 
            
            @media only screen and (max-width: 412px){
                .login{
                    width: 60%;
                    margin: 10% 20%;
                    
                }
            }                
        </style>
    </head>
    <body onload="load()">
        <div class="container">
            <div id="snackbar"></div>
            
            <div class="login">
                <div class="row">
                    <div class="col-sm-12 company">
                        <center>
                            <h1>GODLY LTD.</h1>
                        </center>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-sm-12" >
                        <h3><center>Admin Page</center></h3>
                        <form method="post" action="req/login.php">
                            <div class="form-group">
                            <label for="email">Username:</label><br>
                            <input type="text" class=" text" name="user" required>
                            </div>
                            <div class="form-group">
                            <label for="pwd">Password:</label><br>
                            <input type="password" class=" text" name="pass" required>
                            </div>
                            <div class="checkbox">
                            <label><input type="checkbox" name="remember"> Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-light blogin" name="login"><i class="fas fa-sign-in-alt"></i> Log In</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <center><h5>Developed by Namanpreet Singh</h5></center>
        </div>
    </body>
</html>
<script>
    function load(){
        $(".company").animate({
            top:"-=10",
            opacity:0
        },200,function(){
            $(".company").animate({
               top:"+=10",
               opacity:1    
            },200);
        });
        $(".login").animate({
            top:"-=10",
            opacity:0
        },200,function(){
            $(".login").animate({
               top:"+=10",
               opacity:1    
            },200);
        });
    }
</script>
<?php
    if(isset($_SESSION['login'])){
        alert_func("Username or password incorrect");
        unset($_SESSION['login']);
    }
?>
