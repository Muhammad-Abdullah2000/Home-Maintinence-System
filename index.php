<?php



$insert = false;
if(isset($_POST['email'])){


$server = "localhost";
$root = "root";
$password = "";
$dataBase = "hm";

$conn = mysqli_connect($server, $root, $password, $dataBase);
if(!$conn){
  die("Connection failed" . mysqli_connect_error());
}
     $name = $_POST['email'];
     $items = $_POST['items'];
     $address = $_POST['address'];
     $phone = $_POST['phone'];
$sql = "INSERT INTO `carpentor` (`Name`, `items`, `address`, `phone`) VALUES ('$name', ' $items', '$address', '$phone')";



if($conn->query($sql)==true){
     $insert = true;
}

$conn->close();

}
?>

<?php

$server = "localhost";
$root = "root";
$password = "";
$dataBase = "hm";

$conn = mysqli_connect($server, $root, $password, $dataBase);
if(!$conn){
  die("Connection failed" . mysqli_connect_error());
}



$query="select * from carpentor";




?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="about.css">
     <link rel="stylesheet" href="carpentor.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<nav>


        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <label class="logo">FIXIT.</label>
        <ul>
          <li><a class="active" href="./home.html">Home</a></li>
          <li><a href="./about.html">About</a></li>
          
          <li><a href="./contact.html">Contact</a></li>
         
        </ul>
      </nav>


      <div class="container1">
        <a href="./home.html">
        <button id="btn">&#129060; Back</button>
      </a>
      </div>

      <div class="container my-4">
<table class="table">
  <thead>
    <tr>
     
      <th scope="col">Name</th>
      <th scope="col">items</th>
      <th scope="col">Address</th>
      <th scope="col">phone</th>
    </tr>
  </thead>
 
   
     
      <td><?php  if ($result_set = $conn->query($query)) {
while($row = $result_set->fetch_array(MYSQLI_ASSOC)){
// echo $row['name']." ".$row['Email']. " " . $row['Cnic']."<br>";
echo $row['Name']."<br>"."<br>";
}
 $result_set->close();
} ?></td>
      <td><?php  if ($result_set = $conn->query($query)) {
while($row = $result_set->fetch_array(MYSQLI_ASSOC)){
// echo $row['name']." ".$row['Email']. " " . $row['Cnic']."<br>";
echo $row['items']."<br>"."<br>";
}
 $result_set->close();
} ?></td>

<td><?php  if ($result_set = $conn->query($query)) {
while($row = $result_set->fetch_array(MYSQLI_ASSOC)){
// echo $row['name']." ".$row['Email']. " " . $row['Cnic']."<br>";
echo $row['address']."<br>"."<br>";
}
 $result_set->close();
} ?></td>

<td><?php  if ($result_set = $conn->query($query)) {
while($row = $result_set->fetch_array(MYSQLI_ASSOC)){
// echo $row['name']." ".$row['Email']. " " . $row['Cnic']."<br>";
echo $row['phone']."<br>"."<br>";
}
 $result_set->close();
} ?></td>
   
   
 
</table>
</div>

<div class="container1">
        <a href="./ok.html">
        <button id="btn">Next &#129062;</button>
      </a>
      </div>

      <div class="footer">
        <div class='socialMedia'>
             <i class="fa fa-linkedin" aria-hidden="true" id='social'></i>
             <i class="fa fa-instagram" aria-hidden="true" id='social'></i>
             <i class="fa fa-facebook-square" aria-hidden="true" id='social'></i>
       
        </div>
        <p> &copy; 2023 Muhammad Abdullah, Minaam, Ahmad </p>
       </div>
    
    
     



     </body>
</html>