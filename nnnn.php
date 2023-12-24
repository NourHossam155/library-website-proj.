<?php
$fristname=$_REQUEST['fristname'];
$lastname=$_REQUEST['lastname'];
$pass=$_REQUEST['pass'];
$email=$_REQUEST['email'];
$no=$_REQUEST['no'];
$adress=$_REQUEST['adress'];

if(isset($_POST['btntest']))
{
    $host="localhost";
    $user="root";
    $password="";
    $db="library";



    $connt = mysqli_connect($host,$user,$password,$db);

    $insert= "insert into http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=library&table=sign+in+info values($fristname,$lastname,$pass,$email,$no,$aderss)";


    mysqli_query($connt,$insert);


    if($connt) {
        echo("<h1 style='colour:green;'> Your Restration is Done</h1>")
    }
    else{
        echo("<h1 style ='colour:red;'> Your Restration is Failed</h1>")
    }
}

?>