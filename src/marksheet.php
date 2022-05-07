<?php 
    require_once('connection.php');
    if(isset($_SESSION['User'])){
        $sql = "SELECT ID, Sname, marks1, marks2, marks3, marks4, marks5, marksobt, tmarks, percent FROM Marks";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            ?>
            <div class="container" style="margin-top: 3rem;">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">S_ID</th>
                            <th scope="col">Student</th>
                            <th scope="col">Subject 1</th>
                            <th scope="col">Subject 2</th>
                            <th scope="col">Subject 3</th>
                            <th scope="col">Subject 4</th>
                            <th scope="col">Subject 5</th>
                            <th scope="col">Marks Obt.</th>
                            <th scope="col">Total Marks</th>
                            <th scope="col">Percentage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $row["ID"] ?></th>
                                    <td><?php echo $row["Sname"] ?></td>
                                    <td><?php echo $row["marks1"] ?></td>
                                    <td><?php echo $row["marks2"] ?></td>
                                    <td><?php echo $row["marks3"] ?></td>
                                    <td><?php echo $row["marks4"] ?></td>
                                    <td><?php echo $row["marks5"] ?></td>
                                    <th><?php echo $row["marksobt"] ?></th>
                                    <th><?php echo $row["tmarks"] ?></th>
                                    <td><?php echo $row["percent"] ?> %</td>
                                </tr>
                                <?php
                            }?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php
        } 
        else {
            echo "0 results";
        }
        $con-> close();
    }
    else{
        $con-> close();
        header("location:./welcome.php");
    }
?>

