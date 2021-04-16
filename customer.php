<!DOCTYPE html>
<html>
<head>
<title>Sparks Bank|Customer Details</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/customer.css">
</head>
<body>
<nav class="navbar">
        <h3 id="heading"><i class="fa fa-university"></i> Sparks Bank</h3>
        <ul id="navlist">
           <li><a href="index.html">Home</a></li>
           <li><a href="contact.html">Contact Us</a></li>
        </ul>
       </nav>
<h2 style="text-align: center; margin-top:30px; color:skyblue;">CUSTOMER DETAILS</h2>
<table>
<tr>
<th>Customer Id</th>
<th>Customer Name</th>
<th>Email ID</th>
<th>Current Balance</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "banking");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM customer";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["Name"] . "</td><td>"
. $row["Email"]. "</td><td>". $row["Balance"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<div class="footer">
        <p font-size="20px">For Any more Information -<br> <i class="fa fa-phone" aria-hidden="true"></i>  180-234-22-63 / <i class="fa fa-envelope"></i> sparksbank@mail.com</p>
</div>
</body>
</html>
