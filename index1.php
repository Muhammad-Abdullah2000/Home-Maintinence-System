<?php




// include("Connection.php");
$insert = false;
if(isset($_POST['name'])){


$server = "localhost";
$root = "root";
$password = "";
$dataBase = "web_practice";

$conn = mysqli_connect($server, $root, $password, $dataBase);
if(!$conn){
  die("Connection failed" . mysqli_connect_error());
}
$name = $_POST['name'];
$email = $_POST['email'];
$cnic = $_POST['number'];
// $dob = $_POST['dob'];
$sql = "INSERT INTO `user` (`Name`, `Email`, `Cnic`) VALUES ('$name', '$email', '$cnic');";



if($conn->query($sql)==true){
     $insert = true;
}

$conn->close();

}


// $sql = " SELECT * FROM userdata ORDER BY score DESC ";
// $result = $mysqli->query($sql);
// $mysqli->close();







// if(!preg_match("|^[a-zA-Z]{3,25}$|",$name)){
    
//     echo "<script type='text/javascript'>alert('Invalid name');location='index.html';</script>";
// }
// elseif(!preg_match("|^[a-zA-Z0-9_.]+@[a-z]{3,5}.[a-z]{2,3}$|
// ",$email)){
    
//     echo "<script type='text/javascript'>alert('Invalid email');location='index.html';</script>";
// }
// elseif(!preg_match("|^\d{4}-\d{2}-\d{2}$|

// ",$dob)){
    
//     echo "<script type='text/javascript'>alert('Invalid date');location='index.html';</script>";
// }
// elseif(!preg_match("|^\d{5}-\d{7}-\d{1}$|


// ",$phone)){
    
//     echo "<script type='text/javascript'>alert('Invalid cnic');location='index.html';</script>";
// }



// else{
//     echo "welcome $name <br>";
//     echo "Your email is: $email <br>";
//     echo "Your cnic number is: $phone <br>";
//     echo "Your date of birth is: $dob <br>";
   
   
// }

// }


// header("Location: index.html");

// echo "welcome $name <br>";
// echo "welcome $name <br>";
// echo "Your email is: $email <br>";
// echo "Your phone number is: $phone <br>";
// echo "Your date of birth is: $dob <br>";
// echo "<script>alert('$name');</script>";
?>
<?php

$server = "localhost";
$root = "root";
$password = "";
$dataBase = "web_practice";

$conn = mysqli_connect($server, $root, $password, $dataBase);
if(!$conn){
  die("Connection failed" . mysqli_connect_error());
}

// echo "hello";

$query="select * from user";


// if ($result_set = $conn->query($query)) {
// while($row = $result_set->fetch_array(MYSQLI_ASSOC)){
// // echo $row['name']." ".$row['Email']. " " . $row['Cnic']."<br>";
// echo $row['name'];
// }
//  $result_set->close();
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container">
<table class="table">
  <thead>
    <tr>
     
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Cnic</th>
    </tr>
  </thead>
 
   
     
      <td><?php  if ($result_set = $conn->query($query)) {
while($row = $result_set->fetch_array(MYSQLI_ASSOC)){
// echo $row['name']." ".$row['Email']. " " . $row['Cnic']."<br>";
echo $row['name']."<br>"."<br>";
}
 $result_set->close();
} ?></td>
      <td><?php  if ($result_set = $conn->query($query)) {
while($row = $result_set->fetch_array(MYSQLI_ASSOC)){
// echo $row['name']." ".$row['Email']. " " . $row['Cnic']."<br>";
echo $row['Email']."<br>"."<br>";
}
 $result_set->close();
} ?></td>

<td><?php  if ($result_set = $conn->query($query)) {
while($row = $result_set->fetch_array(MYSQLI_ASSOC)){
// echo $row['name']." ".$row['Email']. " " . $row['Cnic']."<br>";
echo $row['Cnic']."<br>"."<br>";
}
 $result_set->close();
} ?></td>
   
   
 
</table>
</div>
  
</body>
</html>

