<?php
    define('TITLE', "Edit Profile");
    include 'header.php';
    
    if (!isset($_SESSION['userId']))
    {
        header("Location: index.php");
        exit();
    }    
?>
<div style="text-align: center">
    <img id="userDp" src=<?php echo "./uploads/".$_SESSION['userImg']; ?> >
    <h1><?php echo strtoupper($_SESSION['userUid']); ?></h1>
    <hr> 
</div>

<?php
        $userName = '';                             
        $email = ''; 
    
        if(isset($_GET['error']))
        {
            if($_GET['error'] == 'emptyemail')
            {
                echo '<p class="closed">*Profile email cannot be empty</p>';
                $email = $_GET['mail'];
            }
            else if ($_GET['error'] == 'invalidmail')
            {
                echo '<p class="closed">*Please enter a valid email</p>';
            }
            else if ($_GET['error'] == 'emptyoldpwd')
            {
                echo '<p class="closed">*You must enter the current password to change it</p>';
            }
            else if ($_GET['error'] == 'emptynewpwd')
            {
                echo '<p class="closed">*Please enter the new password</p>';
            }
            else if ($_GET['error'] == 'emptyreppwd')
            {
                echo '<p class="closed">*Please confirm new password</p>';
            }
            else if ($_GET['error'] == 'wrongpwd')
            {
                echo '<p class="closed">*Current password is wrong</p>';
            }
            else if ($_GET['error'] == 'samepwd')
            {
                echo '<p class="closed">*New password cannot be same as old password</p>';
            }
            else if ($_GET['error'] == 'passwordcheck')
            {
                echo '<p class="closed">*Confirmation password is not the same as the new password</p>';
            }
        }
        else if (isset($_GET['edit']) == 'success')
        {
            echo '<p class="open">*Profile Updated Successfully</p>';
        }
?>

    <form action="includes/profileUpdate.inc.php" method='post' enctype="multipart/form-data" style="border:1px solid #ccc">
        <div class="container">

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required value=<?php echo $_SESSION['emailUsers']; ?>>

            <label ><b>Update Password</b></label>
            <input type="password" id="old-pwd" name="old-pwd" placeholder="current password" required>

            <label for="pwd"><b>New Password</b></label>
            <input type="password" placeholder="Enter Password" name="pwd" required>

            <label for="pwd-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="pwd-repeat" required>

            <label for="full-name"><b>Full Name</b></label>
            <input type="text" placeholder="Enter First Name" name="f-name" value=<?php echo $_SESSION['f_name']; ?>>
            <input type="text" placeholder="Enter Last Name" name="l-name" value=<?php echo $_SESSION['l_name']; ?>>

            <label for="gender"><b>Gender</b></label>
            <label class="container" for="gender-m">Male
                  <input type="radio" name="gender" value="m" id="gender-m"
                         <?php if ($_SESSION['gender'] == 'm'){ ?> 
                         checked="checked"
                         <?php } ?>>
                  <span class="checkmark"></span>
                </label>
                <label class="container" for="gender-f">Female
                  <input type="radio" name="gender" value="f" id="gender-f"
                         <?php if ($_SESSION['gender'] == 'f'){ ?> 
                         checked="checked"
                         <?php } ?>>
                  <span class="checkmark"></span>
            </label>

            <label for="headline"><b>Headline</b></label>
            <input type="text" placeholder="Enter Your Profile Headline" name="headline" value='<?php echo $_SESSION['headline']; ?>'>

            <label for="bio"><b>Bio</b></label>
            <textarea placeholder="What you want to tell people about yourself" name="bio"><?php echo $_SESSION['bio']; ?></textarea>

            <label for="dp"><b>Profile Picture</b></label>
            <input class="button" type="file" name="dp">


            <button type="submit" name="update-profile" value="Update Profile">Update Profile</button>

        </div>
    </form>

<?php include 'footer.php'; ?> 