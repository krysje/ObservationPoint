<?php
    define('TITLE',"Signup");
    include 'header.php';

    if(isset($_SESSION['userId']))
    {
        header("Location: index.php");
        exit();
    }
?>

<div id="contact">
    <?php

        $userName = '';
        $email = '';

        if(isset($_GET['error']))
        {
            if($_GET['error'] == 'emptyfields')
            {
                echo '<p class="closed">*Fill In All The Fields</p>';
                $userName = $_GET['uid'];
                $email = $_GET['mail'];
            }
            else if ($_GET['error'] == 'invalidmailuid')
            {
                echo '<p class="closed">*Please enter a valid email and user name</p>';
            }
            else if ($_GET['error'] == 'invalidmail')
            {
                echo '<p class="closed">*Please enter a valid email</p>';
            }
            else if ($_GET['error'] == 'invaliduid')
            {
                echo '<p class="closed">*Please enter a valid user name</p>';
            }
            else if ($_GET['error'] == 'passwordcheck')
            {
                echo '<p class="closed">*Passwords donot match</p>';
            }
            else if ($_GET['error'] == 'usertaken')
            {
                echo '<p class="closed">*This User name is already taken</p>';
            }
            else if ($_GET['error'] == 'invalidimagetype')
            {
                echo '<p class="closed">*Invalid image type. Profile image must be a .jpg or .png file</p>';
            }
            else if ($_GET['error'] == 'imguploaderror')
            {
                echo '<p class="closed">*Image upload error</p>';
            }
            else if ($_GET['error'] == 'imgsizeexceeded')
            {
                echo '<p class="closed">*Image too large</p>';
            }
            else if ($_GET['error'] == 'sqlerror')
            {
                echo '<p class="closed">*Website Error: Contact admin to have the issue fixed</p>';
            }
        }
        else if (isset($_GET['signup']) == 'success')
        {
            echo '<p class="open">*Signup Successful. Please login.</p>';
        }
    ?>


    <form action="includes/signup.inc.php" method='post' enctype="multipart/form-data" style="border:1px solid #ccc">
          <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="uid"><b>Username</b></label><br>
            <input type="text" placeholder="Enter Username" name="uid" required value=<?php echo $userName; ?>>

            <label for="email"><br><b>Email</b></label><br>
            <input type="text" placeholder="Enter Email" name="mail" required value=<?php echo $email; ?>>

            <label for="pwd"><br><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pwd" required>

            <label for="pwd-repeat"><br><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="pwd-repeat" required>

            <label for="f-name"><br><b>First Name</b></label>
            <input type="text" placeholder="Enter First Name" name="f-name">

            <label for="l-name"><br><b>Last Name</b></label>
            <input type="text" placeholder="Enter Last Name" name="l-name">


            <label class="container" for="gender"><b>Gender</b><br><br>

            <label for="gender-m">Male
              <input type="radio" checked="checked" name="gender" value="m">
              <span class="checkmark"></span>
            </label><br>

              <label for="gender-f">Female
                <input type="radio" name="gender" value="f">
                <span class="checkmark"></span><br>

            </label>
          </label>



            <label for="Optional"><b><h3>Optional</h3></b><br><b></label>

            <label for="headline"><b>Headline</b></label>
            <input type="text" placeholder="Enter Your Profile Headline" name="headline">

            <label class="Bio" for="bio"><br><b>Bio</b></label>
            <br><textarea rows="4" cols="80" style="font-size: 18px; padding: 7px" placeholder="What you want to tell people about yourself" name="bio"></textarea>

            <br><label for="dp"><b><br><br>Profile Picture</b><br></label>
            <input class="button" type="file" name="dp"><br><br>

            <label>
              <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">Remember me
            </label>

            <button type="submit" name="signup-submit" value="signup">Sign Up</button>

            <div class="container" style="background-color:#f1f1f1; text-align: center" >
                <span class="psw">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a></span><br><br>
              Already have Account?
                <a href="login.php" target="_blank" class="button">Login</a><br>

            </div>
          </div>
    </form>
</div>

<?php include 'footer.php'; ?>
