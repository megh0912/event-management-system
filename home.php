<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $fetch_info['name'] ?> | Home</title>
        <link rel="stylesheet" href="css/style1.css">
        <link rel="stylesheet" href="css/style2.css">
        <link rel="stylesheet" href="css/gallery.css">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="top-header">
    <div class="top-left">
        <div class="top-left-left">
            <img src="http://localhost/PROJECT/images/5.jpeg">
        </div>
        <div class="top-left-right">
            <h1><i><b>Event Everlasting</b></i></h1>
        </div> 
    </div>
    <div class="top-mid">
        
    </div>
    <div class="top-right">
        <ul>
            <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
            <li><a href="#"><i class="fa fa-server" aria-hidden="true"></i>Services <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                <div class="dropdown-menu"><button class="dropbtn"></button>
                     <ul>
                         <li><a href="birthday.html">Birthday </a></li>
                         <li><a href="marriage.html">Marriage</a></li>
                         <li><a href="Anniversary.html">Anniversary</a></li>
                         <li><a href="rice ceremony.html">Rice Ceremony</a></li>
                         <li><a href="engagement.html">Engagement</a></li>
                         <li><a href="Concert.html">Concert</a></li>
                         <li><a href="get together.html">Get Together</a></li>
                         
                         
                     </ul>
                 </div>
             </li>
             <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i>Events <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                <div class="dropdown-menu"><button class="dropbtn"></button>
                     <ul>
                         
                         <li><a href="event.html">Event-Details</a></li>
                     </ul>
                 </div>
             </li>
            <li><a href="aboutus.html"><i class="fa fa-user" aria-hidden="true"></i> About us</a></li>
            <li><a href="gallery.html"> <i class="fa fa-picture-o" aria-hidden="true"></i> Gallery</a></li>
            <li><a href="index1.html"><i class="fa fa-sign-in" aria-hidden="true"></i> Log-out</a></li>
            <li><a href="feedback.html"><i class="fa fa-comments" aria-hidden="true"></i>Feedback</a></li>
        </ul>
        
    </div>
      
    <div class="body-part" style="max-width:2000px; box-shadow: 500px 500px 500px 10px black;">

        <img class="mySlides" src="images/4.avif" style="width:100%;height: 1000px;">
        <img class="mySlides" src="images/1.jpg" style="width:100%;height: 1000px;">
        <img class="mySlides" src="images/2.jpg" style="width:100%;height: 1000px;">
        <img class="mySlides" src="images/3.jpg" style="width:100%;height: 1000px;">
        <img class="mySlides" src="images/4.avif" style="width:100%;height: 1000px;">
        <img class="mySlides" src="images/1.jpg" style="width:100%;height: 1000px;">

    </div>
    <script>
        var myIndex = 0;
        carousel();
        function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 2000); 
        }
    </script>

    </body>
</html>













































