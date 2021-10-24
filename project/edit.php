<?php
session_start();
include("req/connection.php");
if(isset($_COOKIE['admin'])){
    $_SESSION['admin']=$_COOKIE['admin'];
}
if(isset($_SESSION['admin']) && isset($_GET['id'])){
?>
    
<html>
    <head>
        <?php include("header/header.php"); ?>
        <style>
            .home{
                transition: 0.2s;
                border-radius: 10px;
            }
            .home:hover{
                transform: scale(1.2);
            }
            .p_add{
                border: 1px solid #ff00ba;
                margin: 3% 22%;
                padding: 7px;
                border-radius: 10px;
            
            }
            .cancel{
                border: 1px solid grey;
                border-radius: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <br>
            <div id="snackbar"></div>
            <div class="row">
                <div class="col-sm-12">
                    <h2><center>Edit Details</center></h2>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12">
                    
                    <a href="main.php" class="btn btn-success home">
                        <i class="fas fa-home"></i> Home
                    </a>
                
                </div>
                <br>
            </div>
            <div class="row p_add">
                <div class="col-sm-12">
<!--                    <center>-->
                    
            <?php
                $id=$_GET['id'];
                $query="Select * from prescription1 where `ID`='$id'";                     $result=mysqli_query($con,$query);
                $row=mysqli_fetch_array($result);                                 
            ?>      
                    <form action="req/edit.php?id=<?php echo $row['ID'];?>" method="post" class=" needs-validation"
                          novalidate>
                        <div class="form-group row" >
                            <label for="name" class="col">Name:</label>
                            <div class="col">
                                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?php echo $row['p_name'];?>" required>
                            
                                <div class="invalid-feedback">Enter Valid Details.</div>
                            </div>
                        </div>
                        <div class="form-group row has-danger" >
                            <label for="age" class="col">Age:</label>
                            <div class="col">
                                <input type="number" class="form-control" id="age" placeholder="Enter Age" name="age" value="<?php echo $row['p_age'];?>" required>
                            
                                <div class="invalid-feedback">Enter Valid Details.</div>
                            </div>
                        </div>
                        
                        <div class="form-group row" >
                            <label for="sex" class="col">Sex:</label>
                            <div class="col">
                                
                                <input type="radio" value="M" id="M"  name="sex" >Male
                                &emsp;
                                &emsp;
                                <input type="radio"  value="F" id="F"  name="sex" >Female
                                <div class="invalid-feedback">Enter Valid Details.</div>
                            </div>
                        </div>
                <?php
                    if($row['p_sex']=="M"){
                ?>
                        <script>
                            $("#M").attr("checked",1);
                        </script>
                <?php        
                    }else{
                ?>
                         <script>
                            $("#F").attr("checked",1);
                        </script>  
                <?php        
                    }                                    
                ?>                                    
                        <div class="form-group row" >
                            <label for="presc" class="col">Prescription:</label>
                            <div class="col">
                                
                                <textarea class="form-control" id="presc" placeholder="Enter Prescription" name="presc" required><?php echo $row['presc'];?></textarea>
                            
                                <div class="invalid-feedback">Enter Valid Details.</div>
                            </div>
                        </div>
                        <center>
                            <input id="submit" name="submit" type="submit" class="btn btn-primary home" value="Done">
                            <a href="main.php" class="btn btn-light cancel home" style="float:right" >Cancel</a>
                        </center>
                    </form>
<!--                    </center>-->
                </div>
            </div>
        </div>
    </body>
    <script>
        (function() {
          'use strict';
          window.addEventListener('load', function() {
              var forms = document.getElementsByClassName('needs-validation');
              var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
//        $("#submit").click(function(e){
//           if($("#age").val()<0 && $("#age").val()!=""){
//               e.preventDefault();
//               mysnackbar("Enter Valid Age");
//           } 
//        });
        $(".form-control").blur(function(){
            if($(this).val()=="" || $(this).val()<0){
                $(this).addClass("is-invalid");
            }else{
                $(this).removeClass("is-invalid");
            }
            
        })
    </script>
</html>

<?php
    if(isset($_SESSION['edit'])){
        if($_SESSION['edit']==1){
            alert_func("Enter Valid Values");
            unset($_SESSION['edit']);
        }
        if($_SESSION['edit']==2){
            alert_func("Oops Something Went Wrong");
            unset($_SESSION['edit']);
        }
    }
    
}else{
    header("Location:login.php");
}
?>