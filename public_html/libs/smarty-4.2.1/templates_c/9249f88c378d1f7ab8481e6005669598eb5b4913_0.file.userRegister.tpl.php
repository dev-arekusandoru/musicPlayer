<?php
/* Smarty version 4.2.1, created on 2022-11-16 17:03:36
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/userRegister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63755e38ece182_64842140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9249f88c378d1f7ab8481e6005669598eb5b4913' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/userRegister.tpl',
      1 => 1668392658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63755e38ece182_64842140 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/125fe29883.js" crossorigin="anonymous"><?php echo '</script'; ?>
>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body  ">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>

                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="register.php" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="fname" class="form-control form-control-user"
                                            placeholder="First Name" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="lname" class="form-control form-control-user"
                                            placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user"
                                        placeholder="Email Address" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            placeholder="Password" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="vpassword" class="form-control form-control-user"
                                            placeholder="Verify Password" required>
                                    </div>
                                </div>
                                <input type="submit" value="Register Account" class="btn btn-primary btn-user btn-block">

                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="#">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <?php echo '<script'; ?>
 src="vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

    <!-- Core plugin JavaScript-->
    <?php echo '<script'; ?>
 src="vendor/jquery-easing/jquery.easing.min.js"><?php echo '</script'; ?>
>

    <!-- Custom scripts for all pages-->
    <?php echo '<script'; ?>
 src="js/sb-admin-2.min.js"><?php echo '</script'; ?>
>


</body>

</html><?php }
}
