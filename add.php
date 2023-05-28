<?php

require 'db.php';


$roll = $_GET['roll'];
$fullname = $_GET['fullname'];
$result = $_GET['result'];

if(!empty($roll)){
    $sql = "INSERT INTO Students (roll, fullname, result) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    
    $stmt->bind_param("sss", $roll , $fullname, $result);

    if ($stmt->execute() === TRUE) {
    echo $fullname . " created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<table align="center" border="1" bordercolor="#f1f1f0" height="120" width="100%">
  <form action="add.php" method="GET">
  <tbody>
    <tr>
      <td align="right" width="43%"> <strong>Roll: </strong></td>
      <td width="57%"><input name="roll" maxlength="6" type="number"></td>
    </tr>
    <tr>
    <td align="right" width="43%"> <strong>Name: </strong></td>
    
    <td width="57%"> <input name="fullname" type="text">
    </td>
  </tr>
<tr><td align="right"> <strong>Result:  </strong></td>

  <td> <input name="result" type="text"> </td>

</tr>
<tr align="center"> 

  <td></td>

  <td align="left"> <input value="Add" type="submit"> 

  </td>

</tr>

</tbody></table>

</form>
</html>

