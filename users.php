<!DOCTYPE html>
<html lang="en">

<head>
    <title>Users</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="plugins/CSS/w3.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="custom.css">
</head>

<body>
    <!-- NavBar-->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card">
            <a href="#home" class="w3-bar-item w3-button"><b>CSEC</b> ASTU</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                <a href="Scoreboard.html" class="w3-bar-item w3-button">CPD</a>
                <a href="Leaderboard.html" class="w3-bar-item w3-button">Dev</a>
                <a href="#contact" class="w3-bar-item w3-button">Contact</a>
            </div>
        </div>
    </div>

    <div class="profile">
        <div class="w3-third w3-margin-bottom">
            <img src="w3images/CBD.png" alt="New York" style="width: 100%" class="w3-hover-opacity">
            <div class="w3-container w3-white">
                <p><b>Anwar Misbah</b></p>
                <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2">
                    <option>Standard User</option>
                    <option>President</option>
                    <option>V/president</option>
                    <option>CPD Head</option>
                    <option>Dev Head</option>
                    <option>CBD Head</option>
                </select>
                <br><br>
                <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">
                    Save
                </button>
            </div>
        </div>
    </div>
</body>

</html>