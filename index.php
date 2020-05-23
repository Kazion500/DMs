<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KT Online Fashion Store</title>

    <!---BOOTSTRAP CDN-->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <!---SYTLESHEET-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container p-0">
                <a class="navbar-brand text-white logo" href="index.php">P-M<span class="orange-text">s</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <div class=" margin"></div>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="#">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">WHO WE ARE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">WHAT WE DO</a>
                    </li>
                </ul>
              <a href="" class="btn btn-warning git px-3 py-2 btn-sm"> GET IN TOUCH</a>

            </div>
        </div>
    </nav>
    <div class="wrapper-left">
        <p class="pms">PRO-MA<span class="orange-text">RGINAL</span><br /><span class="solu">SOLUTIO</span><span class="orange-text">NS</span></p>
        <p class="h-text">We are programmers that aim a delivering quality and sustainable services.
            For more information click the GET IN TOUCH button</p>
        <p class="o-header">PRO-MARGINAL<br />SOLUTIONS</p>
    </div>
    <div class="wrapper-right">
        <form action="">
            <h4 class="text-center pb-3">Login</h4>
               <label for="Username" class="text-left">Username</label><br />
                <input type="text" class="form-control" placeholder="Your Username">
               <label for="Password" class="text-left pt-1">Password</label><br />
                <input type="password" class="form-control" placeholder="Your Password">
                  <p class="pt-3">Forgot password <a href="">Reset</a></p>
                  <p class="mt-n3">Are you a registered <a href="">Signup</a></p>
            <div class="text-center">
                <button type="submit" class="btn btn-secondary btn-sm mb-2 px-2">Login</button>
            </div>

        </form>
    </div>
</header>

        <!--SCRIPT------->
        <script src="bootstrap/jquery.slim.min.js"></script>
        <script src="bootstrap/bootstrap.bundle.js"></script>
</body>
</html>