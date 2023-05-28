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
      <h4 align="center" style="margin: 20px;"> 
      Result Search </h4> 
  
      <form method="POST" action="result.php">
  
        <table align="center" border="1" bordercolor="#f1f1f0" height="120" width="100%">
  
          <tbody>
            <tr>
              <td align="right" width="43%"> <strong>Select Exam Type</strong></td>
              <td width="57%"> <select name="exam">
                <option value="15">DIPLOMA IN ENGINEERING</option>
              </select> </td>
            </tr>
            <tr>
            <td align="right" width="43%"> <strong>Select Exam Year</strong></td>
            
            <td width="57%"> <select name="year">
               <option value="2023">2023</option>
               <option value="2022">2022</option>
              </select>
            </td>
          </tr>
        <tr><td align="right"> <strong>Type Roll No </strong></td>

          <td> <input name="roll" maxlength="6" type="number"> </td>

        </tr>
        <tr align="center"> 

          <td></td>

          <td align="left"> <input name="Submit" class="submit" value="View Result" type="submit"> 

          </td>

        </tr>

      </tbody></table>

    </form>
  </div>
 
</body>
</html>