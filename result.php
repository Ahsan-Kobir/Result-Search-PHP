<?php

require 'db.php';

$roll = $_POST['roll'];
$year = $_POST['year'];
$exam = $_POST['exam'];

$resultReceived = "";
$name = "";


$sql = "SELECT fullname, result FROM Students WHERE roll='$roll'";

$sqlResult = $conn->query($sql);

if ($sqlResult->num_rows > 0){
    $row = $sqlResult->fetch_assoc();
} else {
echo "<script>
        alert('Invalid Roll or Result Not Found');
        window.window.location.href='index.php';
        </script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results - Barguna Polytechnic Institute</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="icon" type="image/png" href="logo.png">
</head>
<body>

  <div class="title-bar">
   <img class="logo" src="logo.png" alt="BPI Logo"/>
      <h1 class="title-text">Barguna Polytechnic Institute</h1>
  </div>


    <div id="main" style="overflow: hidden; position: absolute; left: 7px; top: 200px; width: 100%; height: auto; z-index: 9; background-color: rgb(255, 255, 255);">
      <h4 align="center" style="margin: 20px;"> <?php echo $row['fullname']; ?>
       </h4> 
  
  
        <table align="center" border="1" bordercolor="#f1f1f0" height="120" width="100%">
  
          <tbody>
            <tr>
              <td align="right" width="43%"> <strong>Roll: </strong></td>
              <td width="57%"> <?php echo $roll; ?> </td>
            </tr>
            <tr>
            <tr>
              <td align="right" width="43%"> <strong>CGPA: </strong></td>
              <td width="57%"><b><?php echo $row['result']; ?> </b> </td>
            </tr>
            <tr>
            <td align="right" width="43%"> <strong>Exam Year: </strong></td>

            <td width="57%">      <?php echo $year; ?></td>
          </tr>
        <tr align="center"> 

          <td></td>

          <td align="left"> <button onclick="window.location.href='index.php';">Check Another</button> 

          </td>

        </tr>

      </tbody></table>
  </div>
 
</body>
</html>