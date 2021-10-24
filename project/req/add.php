<?php
session_start();
include("connection.php");
if(isset($_POST['submit'])){
    $name=input_test($_POST['name']);
    $age=input_test($_POST['age']);
    $sex=input_test($_POST['sex']);
    $presc=input_test($_POST['presc']);
    if($name && $age>=0 && $sex && $presc){
        $i=1;
        do{
            $ref=rand(1000000000,9999999999);
            $query="Select * from prescription1 where `ref_id`='$ref'";
            $result=mysqli_query($con,$query);
            if(mysqli_num_rows($result)>0){
                $i=0;
            }else{
                $i=1;
            }
        }while($i!=1);
        $query="INSERT INTO `prescription1` (`ID`, `p_name`, `p_age`, `p_sex`, `date`, `presc`, `ref_id`) VALUES (NULL, '$name', '$age', '$sex', '".date("Y-m-d")."', '$presc', '$ref')";
        if($result=mysqli_query($con,$query)){
            $_SESSION['invalid']=0;
            header("Location:../main.php");
            
        }else{
            $_SESSION['invalid']=2;
            header("Location:../add.php");

        }    
    }else{
        $_SESSION['invalid']=1;
        header("Location:../add.php");
    }
    
}else{
    header("Location:../add.php");
}
?>