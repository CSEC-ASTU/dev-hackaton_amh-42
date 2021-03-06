<!DOCTYPE html>
<html>

<head>
    <title>Clubs</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="plugins/CSS/w3.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway" />
    <link rel="" href="style.css" />
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

    <!-- Admin Dashboard-->
    <div class="w3-content w3-container w3-padding-64" id="portfolio">
        <h3 class="w3-center">CSEC Clubs</h3>
        <p class="w3-center">
            <em>These are All the clubs in the CSEC_ASTU Club for the time Being.</em>
        </p>
        <br />

        <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
        <div class="w3-row-padding w3-center">
            <div class="w3-col m3">
                <a href="addEvent.html">
                    <img src="w3images/Dev.png" style="width: 100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist over the mountains" />
                </a>
            </div>

            <div class="w3-col m3">
                <img src="w3images/CBD.png" style="width: 100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffee beans" />
            </div>

            <div class="w3-col m3">
                <img src="w3images/CPD.png" style="width: 100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Bear closeup" />
            </div>

            <div class="w3-col m3">
                <img src="w3images/Add_new.png" style="width: 100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean" />
            </div>
        </div>
    </div>
    </div>
</body>

</html>