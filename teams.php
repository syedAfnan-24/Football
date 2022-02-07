<?php
  if (!session_id()) {
    session_start();
  }
  include_once ('dbconn.php');
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teams</title>
    <link rel="stylesheet" href="styling/style.css">
</head>
<body>
    <!--header section-->
    <div id="header">
        <center>
                <table>
                    <tr>
                        <td id="opt">
                            <a id="head" href="index.php">Home</a>
                        </td>
                        <td id="opt">
                            <a id="head" href="teams.php">Teams</a>
                        </td>
                        <td id="opt">
                            <a id="head" href="games.php">Games</a>
                        </td>
                        <td id="opt">
                            <a id="head" href="result.php">Results</a>
                        </td>
                        <td id="opt">
                            <a id="head" href="schedule.php">Schedule</a>
                        </td>
                    </tr>
                </table>
        </center>
    </div>
    <div id="intro">
        
        <div id="container">
                <?php
                $sql = "SELECT * FROM teams";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                  // output data of each row
                  echo "
                    <table>
                        <tr id=\"tdata\">
                            <th>id</th>
                            <th>Club</th>
                            <th>Country</th>
                        </tr>
                    </table>
                    ";
                  while($row = $result->fetch_assoc()) {
                    //echo "id: " . $row["id"]. " - Club: " . $row["Club"]. " Country: " . $row["Country"]. "<br>";
                    
                    echo "
                    <table>
                        <tr id=\"tdata\">
                            <td>". $row["id"] ."</td>
                            <td>". $row["Club"] ."</td>
                            <td>". $row["Country"] ."</td>
                        </tr>
                    </table>
                    ";
                  }
                } else {
                  echo "0 results";
                }
                $conn->close();
                ?>
        </div>
        
            <a href="regTeam.php"><button id="tBut">Add a new Team</button></a>
        
    </div>
    <!--end header section-->
    
    <!--footer-->
    <div id="footer">
        <center>
            <a id="foot" href="">Home</a> -
            <a id="foot" href="">Teams</a> - 
            <a id="foot" href="">Games</a> -
            <a id="foot" href="">Results</a> -
            <a id="foot" href="">Schedule</a> 
            <p style="font-weight:bold;">© 2022 UEFA</p>
    </center>
    </div>
    <!--end footer-->
</body>
</html>