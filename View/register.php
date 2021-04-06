<!-- ?php 
$db=mysqli_connect("localhost","root","","leisure");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$category=$_POST['category'];
$subcategory=$_POST['subcategory'];
$city=$_POST['city'];
$state=$_POST['state'];
$phone=$_POST['phone'];
$email=$_POST['email'];

    $in=mysqli_query($db,"insert into register(First_Name,last_Name,category,subcategory,state,city,phone,email)values('$fname','$lname','$category','$subcategory','$city','$state','$phone','$email')") or die();
    if($in>0)
    {
        
        echo "<script>alert('registration done succesfully');</script>";
        
        //header('location:index.php');
        echo "<script>window.location='login.php';</script>";
        
    }	
?>
 -->
 <!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
     <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../Skin/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../Skin/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../Skin/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../Skin/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../Skin/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../Skin/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../Skin/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../Skin/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
      
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="" style="background-color: #0a0a0a70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Leisure Time</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Login</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

<!--    $("#profileImage").click(function(e) {
    $("#imageUpload").click();
});

function fasterPreview( uploader ) {
    if ( uploader.files && uploader.files[0] ){
          $('#profileImage').attr('src', 
             window.URL.createObjectURL(uploader.files[0]) );
    }
}

$("#imageUpload").change(function(){
    fasterPreview( this );
});
#imageUpload
{
    display: none;
}

#profileImage
{
    cursor: pointer;
}

#profile-container {
    width: 150px;
    height: 150px;
    overflow: hidden;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
}

#profile-container img {
    width: 150px;
    height: 150px;
}-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div id="profile-container">
   <image id="profileImage" src="http://lorempixel.com/100/100" />
</div>
<input id="imageUpload" type="file" 
       name="profile_photo" placeholder="Photo" required="" capture>
    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
               <!--  <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6>
                </div> -->
            </div>
            <div class="checkout__form">
                <h4>Registration</h4>
                <form action="register.php" method="POST">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>First Name<span>*</span></p>
                                        <input type="text" name="fname">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input type="text" name="lname">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Set Password<span>*</span></p>
                                <input type="password" name="category">
                            </div>
                            <div class="checkout__input">
                                <p>Confirm Password<span>*</span></p>
                                <input type="password" name="subcategory">
                            </div>
                            <div class="checkout__input">
                                <p>Town/City<span>*</span></p>
                                <input type="text" name="city">
                            </div>
                            <div class="checkout__input">
                                <p>Description<span>*</span></p>
                                <input type="text" name="state">
                            </div>
                            <!-- <div class="checkout__input">
                                <p>Postcode / ZIP<span>*</span></p>
                                <input type="text">
                            </div> -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="email" name="email">
                                    </div>
                                </div>
                                <button type="submit" class="site-btn" style="font-size: 14px;color: #ffffff;font-weight: 800;text-transform: uppercase;padding: 13px 30px 12px;border-radius:5px;background: #7fad39;border: none;">Register</button>
                                <button type="button" onclick="window.location.href= 'loginf/index.html';" class="btn" style="font-size: 14px;color: #ffffff;font-weight: 800;text-transform: uppercase;padding: 13px 30px 12px;margin:0% 5%;background: #16a3ce;border: none;">Login</button>
                            </div>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

   

</body>

</html>