<?php

include './contact.php';
$postId = $_GET['id'];
$query ="SELECT * FROM datas WHERE id ='$postId'";
$result= mysqli_query($conn ,$query);
$post = mysqli_fetch_assoc($result);





?>



<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <!--Google Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- End Bootstrap CSS -->

    <!--Custom Css-->
    <link rel="stylesheet" href="./CSS/style.css">
    <!--End Custom Css-->
</head>

<body>

   
    <!--Header Start-->
    <header>
        
        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h2 class="fw-bold  mb-2 mb-lg-0 mb-sm-0">Collage</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bi bi-list"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="create.php">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="list.php"> Contact list</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mb-2 mb-lg-0 action-menu">
                        <li class="nav-item">
                          
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Navbar End-->
    </header>

    <section id="contact us">
            <div class="container mb-5">
                <!--Section: Contact v.2-->
                <section class="mb-4">

                    <!--Section heading-->
                    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                    <!--Section description-->
                 

                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6 mb-md-0 mb-5 mx-auto">
                            <form id="contact-form" name="contact-form" action="./controllers/updatecontrollers.php?id=<?= $post['id'] ?>" method="POST">

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input value="<?= $post['name'] ?>" type="text" id="name" name="name" class="form-control" placeholder="inter your name"><br>
                                            <?php
    echo isset($_SESSION['name_error'])? $_SESSION['name_error']: "";
     echo "<br>";
  
  
    ?>

                                        </div>
                                    </div>
                                    <!--Grid column-->
                                     <!--Grid column-->
                                     <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input value="<?= $post['mobile'] ?>" type="text" id="mobile" name="mobile" class="form-control" placeholder="inter your mobile"><br>
                                            <?php
    echo isset($_SESSION['mobile_error'])? $_SESSION['mobile_error']: "";
     echo "<br>";
  
  
    ?>
                                           
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <input value="<?= $post['email'] ?>" type="text" id="email" name="email" class="form-control"  placeholder="inter your email"><br>
                                            <?php
    echo isset($_SESSION['email_error'])? $_SESSION['email_error']: "";
     echo "<br>";
  
  
    ?>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                             <!--Grid column-->
                             <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <input value="<?= $post['password'] ?>" type="text" id="password" name="password" class="form-control" placeholder="inter your password"><br>
                                            <?php
    echo isset($_SESSION['password_error'])? $_SESSION['password_error']: "";
     echo "<br>";
  
  
    ?>
                                        </div>
                                    </div>
                                    <!--Grid column-->
                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">

                                        <div class="md-form">
                                            <textarea type="text" id="message" name="message" rows="2"
                                                class="form-control md-textarea"placeholder="inter your message"><?= $post['message'] ?></textarea><br>
                                                <?php
    echo isset($_SESSION['message_error'])? $_SESSION['message_error']: "";
     echo "<br>";
  
  
    ?>
                                         
                                        </div>

                                    </div>
                                </div>
                                <!--Grid row-->

                            </form>

                            <div class="text-center text-md-left">
                                <a class="btn btn-primary"
                                    onclick="document.getElementById('contact-form').submit();">Update</a>
                            </div>
                            <div class="status"></div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <!-- <div class="col-md-6 text-center">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14846.486243894175!2d91.94958922650723!3d21.522538271725885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adb7055baa9b29%3A0xcd4d1d061d5ee611!2sCoxs%20Bazar%2C%20Gorakghata%20Municipality!5e0!3m2!1sen!2sbd!4v1663387034350!5m2!1sen!2sbd" width="1000" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div> -->
                        <!--Grid column-->

                    </div>

                </section>
                <!--Section: Contact v.2-->
            </div>
        </section>


    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</body>
</html>
<?php
session_unset();
?>
