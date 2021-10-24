<?php
session_start();
include("connection.php");
if(isset($_GET['id'])){
    $name=input_test($_POST['name']);
    $age=input_test($_POST['age']);
    $sex=input_test($_POST['sex']);
    $presc=input_test($_POST['presc']);
    $id=$_GET['id'];
    if($name && $age>=0 && $sex && $presc){
        
        $query="Update `prescription1` set `p_name`='$name', `p_age`='$age', `p_sex`='$sex', `presc`='$presc' where `ID`='$id' ";
        if($result=mysqli_query($con,$query)){
            $_SESSION['edit']=0;
            
            header("Location:../main.php");
            
        }else{
            $_SESSION['iedit']=2;
            header("Location:../edit.php");

        }    
    }else{
        $_SESSION['edit']=1;
        header("Location:../edit.php");
    }
    
}else{
    header("Location:../edit.php");
}
?>