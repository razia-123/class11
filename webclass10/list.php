<?php
include './contact.php';
$query ="SELECT * FROM datas";
$result= mysqli_query($conn ,$query);
$posts = mysqli_fetch_all($result,1);


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

    <div class="container">
        <p class=" display-3 h2 text-center mt-3 mb-3">  Contact List</p>
    </div>
    <div class="container">
    <div class="row ">
  
<table class="table text-center table-bordered table-striped table-hover col-lg-6  col-md-12 col-12 mt-5 mx-auto " >
    <thead class="bg-primary">
      <tr>
        <th scope="col">serial no</th>
        <th scope="col">name</th>
        <th scope="col">mobile</th>
        <th scope="col">email</th>
        <th scope="col">password</th>
        <th scope="col">message</th>
        <th scope="col">action</th>
</tr>
    </thead>
        <tbody>
<?php
foreach($posts as $key=> $post){
   

?>
<tr>
    <th scope='row'><?= ++$key?></th>
    <td ><?=$post['name']?></td>
    <td><?=$post['mobile']?></td>
    <td ><?=$post['email']?></td>
    <td ><?=$post['password']?></td>
    <td ><?= strlen($post['message'])>20 ? substr($post['message'],0,20)."..." :$post['message'] ?></td>
    <td >
       <div class="btn-group-sm">
        <a href="./view.php?id=<?=$post['id']?>" class="btn btn-success">View</a>
        <a href="./edit.php?id=<?=$post['id']?>" class="btn btn-warning">Edit</a>
        <a href="./controllers/deletecontrollers.php?id=<?=$post['id']?>" class="btn btn-danger">Delete</a>

       </div> 
    </td>
    </tr> 
    <?php
}
   

?> 
        </tbody>




      
  
</table>
</div>

    </div>



    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</body>
</html>