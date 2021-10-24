<?php
session_start();
    if(isset($_POST['login'])){
        
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        if($user=="namansngh64" && $pass=="naman"){
            $_SESSION['admin']=$user;
            $_SESSION['aname']="Naman";
            if(isset($_POST['remember'])){
                $time=30*24*60*60;
                setcookie("admin",$user,time()+$time);
            }
            header("Location:../main.php");
        }else{
            $_SESSION['login']=1;
            header("Location:../login.php");
        }
    }else{
        header("Location:../login.php");
    }
?>
