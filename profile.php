<?php 
    define('TITLE',"My Profile");
    include 'header.php';
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: index.php");
        exit();
    }
?>

<div style="text-align: center">
    <img id="userDp" src=<?php echo "./uploads/".$_SESSION['userImg']; ?> >
    
    <h1><?php echo strtoupper($_SESSION['userUid']); ?></h1>

    <h3><?php echo $_SESSION['headline']; ?></h3>

    <p><?php echo $_SESSION['bio'];?></p> 

    <hr>
    <h3>Personal Information</h3>


    <h4>Full Name : <?php echo strtoupper($_SESSION['f_name']) . " " . strtoupper($_SESSION['l_name']); ?></h4>

    <h4>D.O.B : </h4>           

    <h4>Gender : 
        <?php 
        if ($_SESSION['gender'] == 'm')
        {
            echo 'Male';
        }
        else if ($_SESSION['gender'] == 'f')
        {
            echo 'Female';
        }
        ?>
    </h4>

    <h4>Address : </h4>

    <h4>School/Collge : </h4>

    <h4>Job : </h4>

</div>


<?php
include 'footer.php';
?> 


                
