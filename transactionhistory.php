<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sparks Bank|Transaction History</title>
    <link rel="stylesheet" href="css/transaction.css">
</head>


<body>
<nav class="navbar">
        <h3 id="heading"><i class="fa fa-university"></i> Sparks Bank</h3>
        <ul id="navlist">
           <li><a href="index.html">Home</a></li>
           <li><a href="contact.html">Contact Us</a></li>
        </ul>
       </nav>
    <div class="container">
    <br>
    <div>
    <h2 style="text-align: center; margin-top:30px; color:skyblue;">TRANSACTION HISTORY</h2>
    <table style="margin-top:60px; box-shadow:2px 2px 8px grey;">
        <thead style="color : black;">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;">
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['reciever']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<div class="footer">
        <p font-size="20px">For Any more Information -<br> <i class="fa fa-phone" aria-hidden="true"></i>  180-234-22-63 / <i class="fa fa-envelope"></i> sparksbank@mail.com</p>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

</body>