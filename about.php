<?php
session_start();
// error_reporting(0); // Uncomment for production
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System || About Us Page</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
    <?php include_once('includes/header.php');?>
    <div class="banner banner5">
        <div class="container">
            <h2>About Us</h2>
        </div>
    </div>
    <div class="about">
        <div class="container">
            <div class="about-info-grids">
                <div class="col-md-5 abt-pic">
                    <!-- Make sure the image path is correct -->
                    <img src="images/team.jpg" class="img-responsive" alt="Team Photo">
                </div>
                <div class="col-md-7 abt-info-pic">
                    <p>Founded by a dynamic team of four individuals during their pursuit of Master's degrees in the United States, our journey began with a shared vision to revolutionize student database management. Fueled by our passion for technology and education, we embarked on a mission to simplify and enhance the way educational institutions organize and manage student information.</p>

                    <p>Each member of our team brings a unique blend of expertise, ranging from software development and database management to user experience design and project management. Together, we leverage our diverse skill sets to create innovative solutions that meet the evolving needs of educational institutions in the digital age.</p>

                    <p>With a deep understanding of the challenges faced by administrators, educators, and students alike, we are committed to developing a comprehensive Student Database Management System (SDMS) that streamlines administrative tasks, enhances communication, and empowers educators to focus on what matters most – fostering student success.</p>

                    <p>Driven by our shared dedication to excellence and continuous improvement, we are excited to embark on this journey to transform the educational landscape, one institution at a time. Join us as we redefine the future of student database management with our cutting-edge technology and unwavering commitment to excellence.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <?php include_once('includes/footer.php');?>
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){        
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
            });
        });
    </script>
</body>
</html>
