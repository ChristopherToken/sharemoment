<?php //HEADER

include 'navigator.php'; 

?>


<!DOCTYPE html>
<html lang="en">
        <!--landing page-->
        <!--Css connect to landing.css-->
        <link rel="stylesheet" type="text/css" href="landing.css">
        <header class="masthead text-white ">
            <div class="overlay"></div>
            <div class="container slider-top-text">
                <div class="row">
                    <div class="col-md-12 text-center ">
                        <h3 class="my-heading ">EXPLORE<span class="moment"> THE MOMENT</span></h3>        
            
            
            <!--Search bar-->
                <?php include "searchBar.php"; ?>
            
            
            <!--Trending Search-->
            <div>            
            <p class="myp-slider text-center"></p>
            <p class="myp text-center">Trendig Search | <a class="trending" href="#">Hill tripe, </a> <a class="trending" href="#"> Thai Smile,</a> <a class="trending" href="#">Bangkok,</a> <a class="trending" href="#">Bag Packer,</a> </p>
            <!--<a class="btn btn-primary btn-join" href="#">SHARE YOUR MOMENT</a>-->
        </div>
            <div class="col-md-12 text-center mt-5">
                <div class="scroll-down">
                    <a class="btn btn-default btn-scroll floating-arrow" href="#down"><i class="fa fa-angle-down"></i></a>
                </div>
            </div>
        </div>
        </header>


        <body>


            <?php //Gallery Feed
                    include 'gallery-feed.php';
            ?>

 
            <!--Gallery Function-->
            <?php include 'galleryFunction.php'; ?>
 
        <!--JAVA SCRPT -->
        <?php include 'JS/homeJS.php'; ?>


