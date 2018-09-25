<?php 


/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'sharemoment');
 
/* Attempt to connect to MySQL database */
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


    //PULL POST FROM DATABASE
    $query = "SELECT * FROM sharemoment";
    $select_posts = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($select_posts)) {

        $id = $row['id'];           
        $username = $row['username'];
        $name = $row['name'];
        $email = $row['email'];
        //$post_image = $row['image_name'];
    
    //DISPLAY POST IN TABLE
    echo "<tr>";
        echo "<td>{$username}</td>";
        echo "<td>{$name}</td>";
        echo "<td>{$email}</td>";
        echo "<td><img src='uploaded/$post_image'</td>";
    echo "</tr>";

    }  

?>

<!DOCTYPE html>
<html>
<head>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Kanit');
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="CSS/gallery.css">

    <style>
    
    .thumbnail {
    display: block;
    padding: 4px;
    margin-bottom: 0px;
    line-height: 1.42857143;
    background-color: #fff;
    border: none;
    border-radius: 4px;
    -webkit-transition: all .1s ease-in-out;
    -o-transition: all .1s ease-in-out;
    transition: all .1s ease-in-out;
}


    </style>
</head>
<body>
<div class="container">

                <div class="col-md-12">
                    <div id="down" class="row">
                        <hr>

                        <div class="gal">

                    
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"  data-caption="Thai tample please pray for Thailand Some lovely red flowers"  data-image="" data-target="#image-gallery" >
                      <?php  echo "<td><img src='uploaded/$post_image'</td>";?>
                    </a>
             
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"  data-caption="Thai tample please pray for Thailand Some lovely red flowers" data-image="https://images.pexels.com/photos/904911/pexels-photo-904911.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-target="#image-gallery" >
                        <img src="https://images.pexels.com/photos/904911/pexels-photo-904911.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                    </a>

                    
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"  data-caption="Thai tample please pray for Thailand Some lovely red flowers" data-image="https://images.pexels.com/photos/518213/pexels-photo-518213.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-target="#image-gallery" >                    
                        <img src="https://images.pexels.com/photos/518213/pexels-photo-518213.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                    </a> 

                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"  data-caption="Thai tample please pray for Thailand Some lovely red flowers" data-image="https://images.unsplash.com/photo-1507358522600-9f71e620c44e?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=9606de2cffd6c619093871ef2d1c0e6f&auto=format&fit=crop&w=1350&q=80" data-target="#image-gallery" >                    
                        <img src="https://images.unsplash.com/photo-1507358522600-9f71e620c44e?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=9606de2cffd6c619093871ef2d1c0e6f&auto=format&fit=crop&w=1350&q=80" alt="">
                    </a>

                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"  data-caption="Thai tample please pray for Thailand Some lovely red flowers" data-image="https://images.pexels.com/photos/460376/pexels-photo-460376.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-target="#image-gallery" >                                        
                        <img src="https://images.pexels.com/photos/460376/pexels-photo-460376.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                    </a>
                    
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"  data-caption="Thai tample please pray for Thailand Some lovely red flowers" data-image="https://images.pexels.com/photos/721169/pexels-photo-721169.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-target="#image-gallery" >                                                            
                            <img src="https://images.pexels.com/photos/721169/pexels-photo-721169.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                    </a>

                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"  data-caption="Thai tample please pray for Thailand Some lovely red flowers" data-image="https://images.pexels.com/photos/460223/pexels-photo-460223.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-target="#image-gallery" >                                                            
                         <img src="https://images.pexels.com/photos/460223/pexels-photo-460223.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                    </a>
                    
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"  data-caption="Thai tample please pray for Thailand Some lovely red flowers" data-image="https://images.pexels.com/photos/1376967/pexels-photo-1376967.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-target="#image-gallery" >                                                            
                        <img src="https://images.pexels.com/photos/1376967/pexels-photo-1376967.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                    </a>
                    
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"  data-caption="Thai tample please pray for Thailand Some lovely red flowers" data-image="https://images.pexels.com/photos/730426/pexels-photo-730426.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-target="#image-gallery" >                                                                                
                         <img src="https://images.pexels.com/photos/730426/pexels-photo-730426.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                    </a>

                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"  data-caption="Thai tample please pray for Thailand Some lovely red flowers" data-image="https://images.pexels.com/photos/733035/pexels-photo-733035.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-target="#image-gallery" >                                                                                
                        <img src="https://images.pexels.com/photos/733035/pexels-photo-733035.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                    </a>

                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"  data-caption="Thai tample please pray for Thailand Some lovely red flowers" data-image="https://images.pexels.com/photos/161197/wat-phra-temple-chiang-mai-thailand-161197.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-target="#image-gallery" >                                                                                
                         <img src="https://images.pexels.com/photos/161197/wat-phra-temple-chiang-mai-thailand-161197.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                    </a>

                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"  data-caption="Thai tample please pray for Thailand Some lovely red flowers" data-image="https://images.pexels.com/photos/733030/pexels-photo-733030.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-target="#image-gallery" >                                                                                
                            <img src="https://images.pexels.com/photos/733030/pexels-photo-733030.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                    </a>  
                    
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"  data-caption="Thai tample please pray for Thailand Some lovely red flowers" data-image="https://images.pexels.com/photos/730427/pexels-photo-730427.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-target="#image-gallery" >                                                                                
                            <img src="https://images.pexels.com/photos/730427/pexels-photo-730427.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                    </a>
                    
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"  data-caption="Thai tample please pray for Thailand Some lovely red flowers" data-image="https://images.pexels.com/photos/257433/pexels-photo-257433.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-target="#image-gallery" >                                                                                                    
                            <img src="https://images.pexels.com/photos/257433/pexels-photo-257433.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                    </a>

                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"  data-caption="Thai tample please pray for Thailand Some lovely red flowers" data-image="https://images.pexels.com/photos/234757/pexels-photo-234757.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-target="#image-gallery" >                                                                                                    
                        <img src="https://images.pexels.com/photos/234757/pexels-photo-234757.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                    </a>

                        </div>

                    </div>
                </div>
            </div>
        
    <script type="text/javascript">
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
</html>