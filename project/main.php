<?php
session_start();
include("req/connection.php");
if(isset($_COOKIE['admin'])){
    $_SESSION['admin']=$_COOKIE['admin'];
}
if(isset($_SESSION['admin'])){
?>

<html>
    <head>
        <?php
            include("header/header.php");
        ?>
        <style>
            .add{
                transition: 0.2s;
            }
            .add:hover{
                transform: scale(1.2);
            }
            .logout{
                transition: 0.2s;
            }
            .logout:hover{
                transform: scale(1.2);
            }
            .ev{
                transition: 0.2s;
                
            }
            .ev:hover{
                transform: scale(1.5);
                
            }
            
        </style>
    </head>
    <body>
        <div class="container">
            <div id="snackbar"></div>
            <div class="row">
                <div class="col-sm-12">
                    <h1><center>Welcome Naman</center></h1>
                </div>
            </div>
            <div class="row" >
                <div class="col-sm-12" >
                    <a href="req/logout.php" style="float:right" class="btn btn-danger logout">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-12">
                    <h3><center>Prescriptions</center></h3>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12">
                <center>    
                    <a href="add.php" class="btn btn-success add">
                        <i class="fas fa-plus-circle"></i> Add
                    </a>
                </center>
                </div>
            </div>
            <br>
            <div class="row table-responsive" >
                <div class="col-sm-12">
                    <table class="table table-striped table-dark">
                        <thead class="thead-dark">
                            <tr>
                                <th>
                                    S.No
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Date
                                </th>
                                <th>
                                    Reference ID
                                </th>
                                <th>
                                
                                </th>
                                <th>
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php
                        $query="SELECT * FROM `prescription1`";
                        $result=mysqli_query($con,$query);
                        $i=1;
                        while($row=mysqli_fetch_array($result)){
                            
                    ?>
                            <tr>
                                <td>
                                    <?php echo $i++; ?>
                                </td>
                                <td>
                                    <?php echo $row['p_name'] ?>
                                </td>
                                <td>
                                    <?php echo $row['date'] ?>
                                </td>
                                <td>
                                    <?php echo $row['ref_id'] ?>
                                </td>
                                <td>
                                    <a href="view.php?ref=<?php echo $row['ref_id']; ?>" class="btn btn-link ev" data-toggle="tooltip" data-placement="bottom" title="View">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['ID']; ?>" class="btn btn-link ev" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                    <?php        
                        }
                    ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
    if(isset($_SESSION['invalid'])){
        if($_SESSION['invalid']==0){
            alert_func("Prescription Uploaded!");
            unset($_SESSION['invalid']);
        }
    }
    if(isset($_SESSION['edit'])){
        if($_SESSION['edit']==0){
            alert_func("Updated!!");
            unset($_SESSION['edit']);
        }
    }
    if(isset($_SESSION['ref'])){
        if($_SESSION['ref']==0){
            alert_func("Invalid Reference ID!!");
            unset($_SESSION['ref']);
        }
    }
}else{
    header("Location:login.php");
}
                    
?>