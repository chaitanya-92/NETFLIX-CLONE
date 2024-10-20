<?php
    
        if(isset($_POST['submit']))
        {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "netflix";
        //create  connection

        $conn = mysqli_connect($servername,$username,$password,$dbname);

        if(!$conn)
        {
            die("Connection Failed".mysqli_connect_error());
        }

                $netflix_uname=null;
                //netflix username
                $netflix_uname = $_POST["t1"];
                $netflix_upss = $_POST["pw"];
                $username_error="UserNotFound";

        }
?>