<?php
    define('TITLE',"Signup");
    include 'header.php';

    if(isset($_SESSION['userId']))
    {
        echo '<img id="status" src="">';
    }
    else
    {
        echo '<img id="status" src="">';
    }

?>
<div id="login">
    <?php
        if(isset($_SESSION['userId']))
        {
                echo "<script> location.href='profile.php'; </script>";
                exit;
        }
        else
        {
            if(isset($_GET['error']))
            {
                if($_GET['error'] == 'emptyfields')
                {
                    echo '<p class="closed">*please fill in all the fields</p>';
                }
                else if($_GET['error'] == 'nouser')
                {
                    echo '<p class="closed">*username does not exist</p>';
                }
                else if ($_GET['error'] == 'wrongpwd')
                {
                    echo '<p class="closed">*wrong password</p>';
                }
                else if ($_GET['error'] == 'sqlerror')
                {
                    echo '<p class="closed">*website error. contact admint to have it fixed</p>';
                }
            }
            echo '
                <form action="includes/login.inc.php" method="post" style="border:1px solid #ccc">
                    <div class="container">
                      <h1>Log In</h1>
                      <p>Please fill in this form to log into an account.</p>
                      <hr>
                      
                     <div class="container">
                       <label for="uname"><b>Username</b></label>
                      <input type="text" placeholder="Enter Username" name="mailuid" placeholder="Enter email/username" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="pwd" placeholder="Enter password" required>

                        <label>
                          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                        </label>

                        <button type="submit" name="login-submit" value="Login">Login</button>

                      </div>

                      <div class="container" style="background-color:#f1f1f1; text-align: center">
                      If you don\'t have Account?
                        <a href="signup.php" target="_blank" class="button">Sign Up</a><br>
                        <span class="psw">Forgot <a href="#">password?</a></span>
                      </div>
                    </div>
                </form>';
        }
    ?>
</div>


<?php
    include 'footer.php';
?>

<a href=""></a>
