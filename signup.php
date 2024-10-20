<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UP</title>
    <link rel="stylesheet" href="signin.css">
</head>
<body>
    <div class="firstoverlay">
        <div class="secondoverlay">
            
            <div class="navbar">

            <div class="logo">
                <img src="logo.png" alt="">
            </div >

            </div>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                <h1>Create Account</h1>
                <input type="text" name="t1" placeholder="UserId">
                <input type="text" name="t2" placeholder="Email">
                <input type="password" name="t3" placeholder="Password">
                <input type="text" name="t4" placeholder="Phone number">
                <button type="submit" name="submit">Sign Up</button>
                <span id="fp1">
               
                
                <a href="">Need help?</a>
                </span>
                


            </form>

        </div>
    </div>
</body>
</html>

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

                //netflix username
                $netflix_uname = $_POST['t1'];
                $netflix_pw = $_POST['t3']; 
                $netflix_em = $_POST['t2'];
                $netflix_phno = $_POST['t4'];
                $netflix_memtype = "gold";

                $query = "INSERT INTO users (user_id,email_id, phone_no, npassword, membership_type) VALUES ('$netflix_uname','$netflix_em','$netflix_phno','$netflix_pw','$netflix_memtype')";

                $result = mysqli_query($conn,$query);

                if($result)
                {
                    echo "User Registered";
                }
                else
                {
                    $err = mysqli_error($conn);
                    echo $err;
                }
                
    }
?>