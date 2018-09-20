<?php //HEADER

include 'main-header.php'; 

?>


<!DOCTYPE html>
<html lang="en">
        <!--landing page-->
        <!--Css connect to landing.css-->
        <link rel="stylesheet" href="landing.css">
        <header class="masthead text-white ">
            <div class="overlay"></div>
            <div class="container slider-top-text">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="my-heading ">EXPLORE<span class="moment"> THE MOMENT</span></h3>
                        </div>
                    <div class="col align-self-center">
                    <div class=" col-md-12 text-center">
                     <form class="form-inline col-md-7">
                        <input class="myform-control " type="search" placeholder="Find your moment" aria-label="Search">
                        <button class="btn btn-light"><i class="fa fa-search"></i></button>
                    </form>
                    </div>
                    
                    </div>

                    <div class="col-md-12 text-center">
                        <p class="myp-slider text-center"></p>
                        <p class="myp text-center">Trendig Search | <a class="trending" href="#">Hill tripe, </a> <a class="trending" href="#"> Thai Smile,</a> <a class="trending" href="#">Bangkok,</a> <a class="trending" href="#">Bag Packer,</a> </p>
                        <!--<a class="btn btn-primary btn-join" href="#">SHARE YOUR MOMENT</a>-->
                    </div>
                    </div>
                    <div class="col-md-12 text-center mt-5">
                        <div class="scroll-down">
                            <a class="btn btn-default btn-scroll floating-arrow" href="#down"><i class="fa fa-angle-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <body>


            <?php //Gallery Feed
                    include 'gallery-feed.php';
            ?>

            <footer>

                <?php //Include Footer
                    include 'main-footer.php';
                ?>
                
            </footer>

            <!--Gallery Function-->
            <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" >
            <div class="modal-content">
                <div class="modal-header">
                    <div class="col-8">
                        <span class="photoBy">
                       <p>Shoot by: <a class="photoBy" id="BY" href="">Komsak</a></p>
                        </span>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    </div>
                </div>
                <div class="modal-body">
                    <img id="image-gallery-image" class="img-responsive img-fluid"  src="">
                </div>
                <div class="modal-footer"> 
                    
                   <!-- PREVIOS BUTTON 
                       
                   <div class="col-md-4">
                        <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                    </div> -->
                    
                    
                   <div class="col-md-8 text-justify" id="image-gallery-caption">
                        This text will be overwritten by jQuery
                    </div>
                    <div class="col-md-4">
                    <a href="#" class="btn btn-info" role="button">Download</a>
                    </div>
            <script type="text/javascript">
            </script>
            
        </body>
 
        <!--JAVA SCRPT -->
        <script>
            //nav black effect
            $(window).on("scroll", function() {
                if ($(this).scrollTop() > 10) {
                    $("nav.navbar").addClass("mybg-dark");
                    $("nav.navbar").addClass("navbar-shrink");


                } else {
                    $("nav.navbar").removeClass("mybg-dark");
                    $("nav.navbar").removeClass("navbar-shrink");

                }
            });

//Gallery function
             $(document).ready(function() {


loadGallery(true, 'a.thumbnail');

//This function disables buttons when needed
/*
function disableButtons(counter_max, counter_current) {
    $('#show-previous-image, #show-next-image').show();
    if (counter_max == counter_current) {
        $('#show-next-image').hide();
    } else if (counter_current == 1) {
        $('#show-previous-image').hide();
    }
}
*/

/**
 *
 * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
 * @param setClickAttr  Sets the attribute for the click handler.
 */

function loadGallery(setIDs, setClickAttr) {
    var current_image,
        selector,
        counter = 0;

    $('#show-next-image, #show-previous-image').click(function() {
        if ($(this).attr('id') == 'show-previous-image') {
            current_image--;
        } else {
            current_image++;
        }

        selector = $('[data-image-id="' + current_image + '"]');
        updateGallery(selector);
    });

    function updateGallery(selector) {
        var $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-caption').text($sel.data('caption'));
        $('#image-gallery-title').text($sel.data('title'));
        $('#image-gallery-image').attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
    }

    if (setIDs == true) {
        $('[data-image-id]').each(function() {
            counter++;
            $(this).attr('data-image-id', counter);
        });
    }
    $(setClickAttr).on('click', function() {
        updateGallery($(this));
    });
}
});
   
        </script>
    </body>
</body>

