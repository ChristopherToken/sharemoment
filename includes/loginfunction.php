<?php include 'db.php'; ?>

<?php session_start(); ?>



<?php 

if(isset($_POST['login'])) {

$username = $_POST['username'];
$password = $_POST['password'];


$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);

$query = "SELECT * FROM sharemoment WHERE username = '{$username}' ";
$select_user_query = mysqli_query($connection, $query);
    if(!$select_user_query) {

        die("QUERY FAILED". mysqli_error($connection));

    }


        while($row = mysqli_fetch_array($select_user_query)) {

            $db_id = $row['id'];
            $db_username = $row['username'];
            $db__user_password= $row['password'];
            $db_user_real_name = $row['name'];
            $db__user_email= $row['email'];
            $db_created_at = $row['created_at'];

        }

    }




        if($username !== $db_username && $password !== $db__user_password) {

            header("Location: ../includes/login.php");

        } else if ($username == $db_username && $password == $db__user_password) {


            header("Location: ../includes/register.php");

        } else {

            header("Location: ../includes/login.php");

        }

        ?>