<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>Login Form in PHP With Session</title>
</head>

<body style="background:#CCC;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-dark mt-5">
                    <div class="card-title bg-primary text-white mt-5">
                        <h3 class="text-center py-3">Login Form in PHP </h3>
                    </div>
                    <?php 
                        if(@$_GET['Empty']==true){
                    ?>
                    <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>
                    <?php
                        }
                    ?>
                    <?php 
                        if(@$_GET['Invalid']==true){
                    ?>
                    <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>
                    <?php
                        }
                    ?>
                    <div class="card-body">
                        <form action="./src/process.php" method="post">
                            <input type="text" name="UName" id="name" placeholder=" User Name"
                                class="form-control mb-3">
                            <input type="password" name="Password" id="pass" placeholder=" Password"
                                class="form-control mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                    name="Remember">
                                <label class="form-check-label" for="flexCheckDefault" style="color : white;">
                                    Remember Me
                                </label>
                            </div>
                            <button class="btn btn-success mt-3" name="Login">Login</button>
                        </form>
                        <?php
                        if (isset($_COOKIE['UName']) and isset($_COOKIE['Password'])) {
                            $name = $_COOKIE['UName'];
                            $pass = $_COOKIE['Password'];
                            echo "<script> 
                                document.getElementById('name').value='$name';
                                document.getElementById('pass').value='$pass';
                            </script>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>