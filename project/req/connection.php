<?php
$con=mysqli_connect("localhost","root","","project3")
        or die("Database Connection Error :".mysqli_connect_error());
            function input_test($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
?>