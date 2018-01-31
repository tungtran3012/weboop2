<?php
session_start();
include('controller/c_user.php');
$c_user = new C_user();

if(isset($_POST['dangki'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $repassword = $_POST['passwordAgain'];

    if ($password == $repassword) {
        $user = $c_user->dangkiTK($name,$email,$password);

    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Khoa Pham</title>

    <!-- Bootstrap Core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/css/shop-homepage.css" rel="stylesheet">
    <link href="public/css/my.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.public/js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"> Tin Tức</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="#">Liên hệ</a>
                    </li>
                </ul>

                <form class="navbar-form navbar-left" role="search">
                 <div class="form-group">
                   <input type="text" class="form-control" placeholder="Search">
               </div>
               <button type="submit" class="btn btn-default">Submit</button>
           </form>

           <ul class="nav navbar-nav pull-right">
            <?php
            if (isset($_SESSION['user_name'])) {
                ?>
                <li>
                   <a>
                      <span class ="glyphicon glyphicon-user"></span>
                      <?=$_SESSION['user_name']?>
                  </a>
              </li>

              <li>
               <a href="dangxuat.php">Đăng xuất</a>
           </li>

           <?php
       }else {
           ?>
           <li>
            <a href="dangki.php">Đăng ký</a>
        </li>
        <li>
            <a href="dangnhap.php">Đăng nhập</a>
        </li>
        <?php
    }

    ?>


</div>



<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">

   <!-- slider -->
   <div class="row carousel-holder">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <?php
        if (isset($_SESSION['reg_error'])) {
            echo "<div class='alert alert-danger'>".($_SESSION['reg_error'])."</div>";
        }
        ?>
        <div class="panel panel-default">
         <div class="panel-heading">Đăng ký tài khoản</div>
         <div class="panel-body">
           <form method="POST" action="#">
              <div>
                 <label>Họ tên</label>
                 <input type="text" class="form-control" placeholder="Họ tên" name="name" aria-describedby="basic-addon1">
             </div>
             <br>
             <div>
                 <label>Email</label>
                 <input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1"
                 >
             </div>
             <br>	
             <div>
                 <label>Nhập mật khẩu</label>
                 <input type="password" class="form-control" name="password" aria-describedby="basic-addon1">
             </div>
             <br>
             <div>
                 <label>Nhập lại mật khẩu</label>
                 <input type="password" class="form-control" name="passwordAgain" aria-describedby="basic-addon1">
             </div>
             <br>
             <button type="submit" name="dangki" class="btn btn-success">Đăng ký
             </button>

         </form>
     </div>
 </div>
</div>
<div class="col-md-2">
</div>
</div>
<!-- end slide -->
</div>
<!-- end Page Content -->


<!-- jQuery -->
<script src="public/js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/my.js"></script>

</body>

</html>
