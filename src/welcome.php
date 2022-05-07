<?php
    session_start();
    if(isset($_SESSION['User'])) { ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../css/bootstrap.css">
            <title>Welcome</title>
        </head>
        <body >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-8 col-lg-8 align-self-center">
                    <h1 style="margin:0;"> Welcome </h1>
                </div>
                <div class="col-2 offset-2 col-lg-1 offset-lg-0 align-self-center" style="text-align:right">
                    <h5 style="text-transform:uppercase; margin:0;"><?php echo $_SESSION['User'] ?> </h5> 
                </div>
                <div class="col-12 col-lg-3" style="text-align:center">
                    <a type="button" class="btn btn-light" href="delcookies.php?delete">Delete Cookies</a>
                    <a type="button" class="btn btn-outline-primary" href="logout.php?logout">Logout</a> 
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-around">
                    <?php
                    if($_SESSION['User']=='root'){
                        ?>
                        <div class="col-12 col-md-6" style="text-align:center; margin:10px 0vw">
                        <a type="button" class="btn btn-outline-info" href="welcome.php?Enter">Enter Marks</a>
                        </div>
                        <?php
                    }?>
                    <div class="col-12 col-md-6" style="text-align:center; margin:10px 0vw">
                        <a type="button" class="btn btn-outline-info" href="welcome.php?Marks">See Marksheets</a>
                    </div>
            </div>
        </div>
        <?php 
            if(isset($_GET['Enter']))
            {
                require_once('./entry.php');
            }
            if(isset($_GET['Marks'])){
                require_once('./marksheet.php');
            }
        ?>
        </body>
        </html>

        <?php
    }
    else{
        header("location:../index.php");
    } 
?>