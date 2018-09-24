<?php 
//Include Header
include 'uploadNav.php';


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


if (isset($_POST['submit'])) {
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];

    
    move_uploaded_file($post_image_temp, "uploaded/ $post_image");

    $query = "INSERT INTO sharemoment(image_name)";
    $query .= "VALUES ('{$post_image}')";

    $create_post_query = mysqli_query($connection, $query);


    if(!$create_post_query)   {

        die ("QUERY FAILD" . mysqli_error($connection));
    }
}


?>





<body class="uploadForm">
<div class="container">

  <div class="row">
    <div class="col">
    </div>
    <div class="col">
    <div class ="uploadForm">
    <div class="row" style="padding: 10px 15px 9px;">

    
  <form action="" method="post" enctype="multipart/form-data" role="form">
          <h1 class="text-center">Submit a photo</h1>
          <p class="text-center">Please only upload photos that you own the rights to.</p>
          <div class="form-group"> 
          <div class="row" style="margin-bottom: 20px;">
          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 col-md-offset-3 col-sm-offset-3 col-xs-offset-2"> 
  <input type="file"  name="image" > 
          </div>
          </div>
          <div class="row text-center" style="padding-left: 20px;padding-right: 20px;">
  <button type="submit"  name="submit" class="btn btn-md btn-block btn btn-dark">Add Photo</button>
          </div>                                                 
          </div>                                                                                          
  </form>
        </div>
        </div>
        </div>
    <div class="col">
    </div>
  </div>
</div>
</body>