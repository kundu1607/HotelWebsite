<?php
include 'dbconn.php';

$qry = "SELECT * FROM rooms ";
$res = mysqli_query($conn, $qry);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> check room book Recoard </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

</body>

</html>
<div class="container bg-primary text-center text-white">

</div>
<div>
    <div class="Container-fluid">
        <div class="row ">
            <div class="col-md-12 text-center">
                <div>
                    <H3 class="border border-"> check room book Recoard </H3>
                </div>

                <div>
                    <table class=" table table-bordered text-center">
                        <tr class="bg-primary text-white">
                            <th>Sr_No </th>
                            <th> Name </th>
                            <th>Phone_Number </th>
                            <th>Selected_id_Proof </th>
                            <th>id_Proof_Number </th>
                            <th>Email </th>
                            <th> Book_Date </th>
                            <th> Days_of_Booking</th>
                        </tr>

                        <?php while (
                            $row = mysqli_fetch_assoc(($res))
                        ) {
                            ?>
                            <tr>
                                <td><?php echo $row["Sr_No"] ?> </td>
                                <td><?php echo $row["Name"] ?> </td>
                                <td><?php echo $row["Phone_Number"] ?> </td>
                                <td><?php echo $row["Select_id_Proof"] ?> </td>
                                <td><?php echo $row["Enter_Proof_Number"] ?> </td>
                                <td><?php echo $row["Email"] ?> </td>
                                <td><?php echo $row["Book_Date"] ?> </td>
                                <td><?php echo $row["Days_of_Booking"] ?> </td>
                                <td><a href="#" class="btn btn-primary">Edit</a></td>
                                <td><a href="#" class="btn btn-danger">Delete</a></td>

                            </tr>
                        <?php } ?>

                    </table>
                </div>
            </div>
        </div>
    </div>

</div>