
<?php require("login.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sigin</title>
    <link rel="stylesheet" href="signin.css">
</head>
    <!-- <script>
        document.getElementById("getMessageBtn".addEventListener("click",function()
        {
            var x = new XMLHttpRequest();
            var unm = document.getElementById('t1');
            var upss = document.getElementById('pw');

            x.open("GET","login.php",true);
            x.onreadystatechange = function()
            {
                if(x.readyState== 4 && x.status==200)
                {
                    document.getElementById("invalidusername").innerHTML = x.responseText;              
                }
            }
            x.send();

        }


                ));
    </script> -->

<body>
    <div class="firstoverlay">
        <div class="secondoverlay">
            
            <div class="navbar">

            <div class="logo">
                <img src="logo.png" alt="">
            </div >

            </div>

            <form action="" method="post">

                <h1>Sign In</h1>
                <input type="text" name="t1" placeholder="Email or phone number">
                <p class="error username_error">
                    <?php 
                     if($username_error!=null)
                     {
                         ?> <style>.username_error{display:block}</style> <?php
                         echo $username_error;
                     }
                    
                    ?>
                </p>

                <input type="password" name="pw" placeholder="Password">
                <p class="error password_error">
                
                </p>
                
                <button type="submit" name="submit">Sign In</button>
                
                <span id="fp1">
               
                <span>
                <input type="checkbox" name="chk">
                <label for="chk">Remember me</label>
                </span>
                <a href="">Need help?</a>
                </span>
                <span id="fp2">
                New to Netflix? <a href="signup.php">Sign up now.</a>
                </span>
 
            </form>

        </div>
    </div>
</body>
</html>
