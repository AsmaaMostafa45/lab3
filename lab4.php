<html>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <body>
    <br><br><br>
      <div class="container">
        <div class="row align-items-start">
          <div class="col">
            <h2>Users details</h2>
          </div>
          <div class="col">
           
          </div>
          <div class="col">
            <a href="form.php" class="btn btn-success btn-lg">Add New User</a>
          </div>
        </div>
        
       
        <hr>
        <table class="table table-striped table-bordered">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Genger</th>
        <th scope="col">Mail Status</th>
      </tr>  

<?php
//create db TABLE from file
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname ='customers';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

if(! $conn ) {
   die('Could not connect: ' . mysqli_error($conn));
}

//echo 'Connected successfully<br>';

//get data from form
$nameForm = $_REQUEST['name'];
$emailForm = $_REQUEST['email'];
$genderForm = $_REQUEST['gender'];
$statusForm = $_REQUEST['status'];
//change value of checkbox
if ($statusForm === 'on'){
    $statusFormEff = 'yes';
}else if ($statusForm === ''){
    $statusFormEff = 'no';
}



   //Insert table
   $sql = "INSERT INTO users(Name,Email, Gender, Status) 
   VALUES ( '$nameForm','$emailForm', '$genderForm', '$statusFormEff' )";

   $retval = mysqli_query( $conn,$sql );
   
   if(! $retval ) {
      die('Could not insert to table: ' . mysqli_error($conn));
   }
    
//    echo "<br>Data inserted to table successfully\n";

//select from table users from customers database
$sql = 'SELECT id, Name, Email ,Gender ,Status FROM users';

$result = mysqli_query($conn,$sql );

if(! $result ) {
   die('Could not get data: ' . mysqli_error($conn));
}


if (mysqli_num_rows($result) > 0) {
   // output data of each row
   while($row = mysqli_fetch_assoc($result)) {


      echo "
        
        <tbody>
          <tr>
            <th >{$row['id']}</th>
            <td>{$row['Name']}</td>
            <td>{$row['Email']}</td>
            <td>{$row['Gender']}</td>
            <td> {$row['Status']} </td>
    
          </tr>
         
        </tbody>
       
        
    
    
      ";

   }
 } else {
   echo "0 results";
 }

mysqli_close($conn);

?>

   </table>
  </div>
 </body>
</html>





