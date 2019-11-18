<?php
    session_start();
    require 'includes/dbh.inc.php';

    $companyName = "ObservationPoint";

    function strip_bad_chars( $input ){
        $output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input);
        return $output;
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <title><?php echo TITLE; ?></title>

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

        <!-- Css -->
        <link  rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- BootStrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet"> 

    </head> 

    <body>
        <!-- Header Menu of the Page -->
        <header>
            <!-- Top header menu containing logo and Navigation bar -->
            <div id="top-header">
                <!-- Navigation Menu -->
                <nav id="menu">
                    <ul>
                        <li class="active"><a href="index.php">Home</a></li>
                        <?php
                            if(isset($_SESSION['userId']))
                            {
                                echo'<li><a href="dsa.php">DSA</a></li>
                                    <li><a href="#">CD</a></li>
                                    <li><a href="#">DBMS</a></li>
                                    <li><a href="#">SE</a></li>
                                    <li><a href="#">CA</a></li>
                                    <li><a href="#">CN</a></li>
                                    <li><a href="#">mP</a></li>
                                    <li><a href="#">Cloud</a></li>
                                    ';
                            }
                        ?>
                        <div class="rightalign">
                            <li><a href="about-us.php">About Us</a></li>
                            <?php
                                if(isset($_SESSION['userId']))
                                {
                                    echo'<li><a href="profile.php">Profile</a></li>
                                        <li><a href="edit-profile.php" class="button">Edit Profile</a></li>
                                        <li><a href="includes/logout.inc.php">Log Out</a></li>';
                                }
                                else
                                {
                                    echo'<li><a href="signup.php">Sign Up</a></li>
                                        <li><a href="login.php">Log In</a></li>';
                                }
                            ?>
                        </div>
                    </ul>
                </nav>
            </div>
        </header>
