<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reschedule</title>
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
        <div class="container">
            <div id="container">
                <form action="Cancel1.php" method="post">
                    <input type="text" name="Club" placeholder="Team 1"> <br>
                    <input type="text" name="Club1" placeholder="Team 2"> <br>
                    <center><button type="submit" id="formBut">Withdraw Match</button></center>
                </form>
            </div>
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