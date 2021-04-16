<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Bank|Transaction Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/transfer.css">
</head>

<body>
<nav class="navbar">
    <h3 id="heading"><i class="fa fa-university"></i> Sparks Bank</h3>
    <ul id="navlist">
           <li><a href="index.html">Home</a></li>
           <li><a href="contact.html">Contact Us</a></li>
    </ul>
</nav>

<?php
    include 'config.php';
    $sql = "SELECT * FROM customer";
    $result = mysqli_query($conn,$sql);
?>
<div class="container">
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <h2 style="text-align: center; margin-top:30px; color:skyblue;">TRANSACTION</h2>
                    <table>
                        <thead style="color : black;">
                            <tr>
                            <th scope="col" class="text-center py-2">ID</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['ID'] ?></td>
                        <td class="py-2"><?php echo $rows['Name']?></td>
                        <td class="py-2"><?php echo $rows['Email']?></td>
                        <td class="py-2"><?php echo $rows['Balance']?></td>
                        <td><a href="selecteduserdetail.php?ID= <?php echo $rows['ID'] ;?>"> <button type="button" class="btn" style="background-color : skyblue; outline: none; border: thin; color: white;">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <div class="footer">
        <p font-size="20px">For Any more Information -<br> <i class="fa fa-phone" aria-hidden="true"></i>  180-234-22-63 / <i class="fa fa-envelope"></i> sparksbank@mail.com</p>
</div>
</body>
</html>