
 
 
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
      Sensor value: <input type = "text" name = "sensor" />
          <input type = "submit" class="button" name="insert" value="insert"/>
      </form>
      
   </body>
</html>
<?php 
  if(isset($_GET['insert'])) {
 

    $var=$_GET["sensor"];
if( $_GET["sensor"]  && ctype_digit($_GET["sensor"])) {
    echo "the received value is  :". $_GET['sensor']. "<br />"; 
 }else if( $_GET["sensor"] == "") { }else echo "please enter valid input";

  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'SmartMethodTask3';
  $db_port = 8889;

  // Create connection
  $conn  = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );

 
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql =  "INSERT INTO sensors (Valueid,sensorvalue) VALUES (NULL, '$var')";

if ($conn->query($sql) === TRUE) {
   
}  

$conn->close();
}

?>
 