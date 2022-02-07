<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheduling</title>
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
            <p id="info">
            <div class="signup-form">
                    <?php
                    session_start(); 
                    include "dbconn.php";

                    $T1=$_POST['Club'];
                    $T2=$_POST['Club1'];
                    $d=$_POST['Day'];

                    $sql = "INSERT INTO games (Team1,Team2,Date)
                    VALUES ('$T1', '$T2', '$d')";

                    if ($conn->query($sql) === TRUE) {
                    echo "<center><h1>Scheduled successfully</h1></center>";
                    } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                    $conn->close();
                    ?>
            </p>
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