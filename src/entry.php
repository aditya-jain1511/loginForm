<?php 
    if(isset($_SESSION['User'])){
        if($_SESSION['User']=='root')
        {?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="card bg-dark mt-5">
                            <div class="card-title bg-primary text-white mt-5">
                                <h3 class="text-center py-3">Student Data</h3>
                            </div>
                            <?php 
                                if(@$_GET['Enter']==true){
                            ?>
                            <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Enter'] ?></div>
                            <?php
                                }
                            ?>
                            <div class="card-body">
                                <form action="entryprocess.php" method="post">
                                    <input type="text" name="ID" placeholder=" Student ID" class="form-control mb-3">
                                    <input type="text" name="Sname" placeholder=" Student Name" class="form-control mb-3">
                                    <input type="text" name="marks1" placeholder=" Marks is Subject 1" class="form-control mb-3">
                                    <input type="text" name="marks2" placeholder=" Marks is Subject 2" class="form-control mb-3">
                                    <input type="text" name="marks3" placeholder=" Marks is Subject 3" class="form-control mb-3">
                                    <input type="text" name="marks4" placeholder=" Marks is Subject 4" class="form-control mb-3">
                                    <input type="text" name="marks5" placeholder=" Marks is Subject 5" class="form-control mb-3">
                                    <button class="btn btn-success mt-3" name="Entry">Enter Data</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        else{
            ?>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12" style="text-align:center; margin:5rem 0vw 0 0"><h3>You are not Authorised to Perform this Action</h3></div>
                    <div class="col-12" style="text-align:center;"><h6>Only admin and root user allowed to enter student data</h6></div>
                </div>
            </div>
            <?php
        }
    }
    else{
        header("location:./welcome.php");
    }
?>

