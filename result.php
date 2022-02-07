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
    <title>Result</title>
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
                $sql = "SELECT Date,Team1,Goal1,Goal2,Team2 FROM results";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                  // output data of each row
                  echo "
                    <table>
                        <tr id=\"tdata\">
                            <th>Team 1</th>
                            <th>Team 1 Goals</th>
                            <th> VS </th>
                            <th>Team 2 Goals</th>
                            <th>Team 2</th>
                        </tr>
                    </table>
                    ";
                  while($row = $result->fetch_assoc()) {
                    //echo "id: " . $row["id"]. " - Club: " . $row["Club"]. " Country: " . $row["Country"]. "<br>";
                    
                    echo "
                    <table>
                        <tr id=\"tdata\">
                            <th id=\"res\">On ". $row["Date"] ."</th>
                        </tr>
                        <tr id=\"tdata\">
                            <td>". $row["Team1"] ."</td>
                            <td>". $row["Goal1"] ."</td>
                            <td> - </td>
                            <td>". $row["Goal2"] ."</td>
                            <td>". $row["Team2"] ."</td>
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