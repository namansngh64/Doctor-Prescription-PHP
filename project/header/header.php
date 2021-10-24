        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/23c8a87fa5.js" crossorigin="anonymous"></script>
  <script>
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})
</script>

 <style>
     #snackbar{
  min-width: 250px;
  background-color: #c94646;
  color: #fff;
  text-align: center;
  padding: 10px 30px;
  position: fixed;
  top: 30px;
  right: 1%;
  z-index:1; 
  
    font-size: 18px;
    font-family: open sans;
  border-radius: 4px;
  visibility: hidden;
     }
     #snackbar.show{
  visibility: visible;
  -webkit-animation: fadein 1s, fadeout 0.5s 2.5s;
  animation: fadein 1s, fadeout 0.5s 2.5s;
     }
     @keyframes fadein{
     from{
    top: 0;
         opacity: 0}
     
     }
     to{
    top: 30px;
        opacity: 1}
     @keyframes fadeout{
     from{
    top: 30px;
         opacity: 1}
     to{
    top: 0;
        opacity: 0}
     }
     @-webkit-keyframes fadein{
     from{
    top: 0;
         opacity: 0}
     to{
    top: 30px;
        opacity: 1}
     }
     @-webkit-keyframes fadeout{
         from{
    top: 30px;
        opacity: 1}
         to{
    top: 0;
        opacity: 0}
     }
     .container{
                margin-bottom: 1%;
            }
     .footer{
                bottom: 0;
                position:fixed;
                background: black;
                width: 100%;
                margin: 0;
                z-index: 1;
            }
</style>
<script>
   function mysnackbar(d){
        var x = document.getElementById('snackbar');
        x.className = 'show';
        x.innerHTML=d;
        setTimeout(function(){ x.className = x.className.replace('show', ''); }, 3000);
    }
</script>
<?php
function alert_func($data){
            //echo "<script> alert('$data'); </script>";
            echo "<script>mysnackbar('$data');</script>";
        }
?>
<div class="footer">
            <center><h5>Developed by Namanpreet Singh</h5></center>
</div>