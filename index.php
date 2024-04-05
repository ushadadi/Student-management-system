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
    <title>Student System || Home Page</title>
    <script type="application/x-javascript">addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--bootstrap-->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <!--custom css-->
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <!--script-->
    <script src="js/jquery-1.11.0.min.js"></script>
    <!-- js -->
    <script src="js/bootstrap.js"></script>
    <!-- /js -->
    <!--fonts-->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!--/fonts-->
    <!--hover-grids-->
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/modernizr.custom.js"></script>
    <!--/hover-grids-->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <!--script-->
    <script type="text/javascript">
        $(document).ready(function($) {
            $(".scroll").click(function(event){        
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
            });
        });
    </script>
    <!--/script-->
</head>
<body>
    <?php include_once('includes/header.php');?>
    <div class="banner">
        <div class="container">
            <script src="js/responsiveslides.min.js"></script>
            <script>
                $(function () {
                    $("#slider").responsiveSlides({
                        auto: true,
                        nav: true,
                        speed: 500,
                        namespace: "callbacks",
                        pager: true,
                    });
                });
            </script>
            <div class="slider">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider">
                        <li>     
                            <h3>Student System</h3>      
                            <p>Registered Students can Login Here</p>             
                            <div class="readmore">
                                <a href="user/login.php">Student Login<i class="glyphicon glyphicon-menu-right"> </i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="welcome">
        <div class="container">
            <?php
            $sql="SELECT * from tblpage where PageType='aboutus'";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);

            if($query->rowCount() > 0)
            {
                foreach($results as $row)
                {               
            ?>
            <h2><?php echo htmlentities($row->PageTitle);?></h2>
            <p>Fantastic four: A dynamic team of four individuals pursuing their Master's degrees in the United States, dedicated to revolutionizing student database management.</p>
            <?php
                }
            } // This closes the if statement started at line 79
            ?>
        </div>
    </div>
    <!--/welcome-->

    <!--testimonials-->
    <div class="testimonials">
        <div class="container">
            <div class="testimonial-info">
                <h3>Public Notices</h3>
                <marquee style="height:350px;" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
                    <?php
                    $sql="SELECT * from tblpublicnotice";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results=$query->fetchAll(PDO::FETCH_OBJ);

                    if($query->rowCount() > 0)
                    {
                        foreach($results as $row)
                        {
                    ?>
                    <a href="view-public-notice.php?viewid=<?php echo htmlentities ($row->ID);?>" target="_blank" style="color:#fff;">
                        <?php echo htmlentities($row->NoticeTitle);?>(<?php echo htmlentities($row->CreationDate);?>)</a>
                    <hr /><br />
                    <?php $cnt=$cnt+1;}} ?>
                </marquee>
            </div>
        </div>
    </div>
    <!--/testimonials-->

    <!--specification-->

    <!--/specification-->
    <?php include_once('includes/footer.php');?>
    <!--/c
