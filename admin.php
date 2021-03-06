<!DOCTYPE html>
<html>
<?php
session_start();
if ($_SESSION['role'] == 'admin') {

?>


    <head>
        <title>Admin</title>
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
                    <a href="logout.php" class="w3-bar-item w3-button"> Logout</a>;
                </div>
            </div>
        </div>

        <!-- Admin Dashboard-->
        <div class="w3-content w3-container w3-padding-64" id="portfolio">
            <h3 class="w3-center">Admin Dashboard</h3>
            <p class="w3-center">
                <em>Here are things that the admin of this site can manage.</em>
            </p>
            <br />

            <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
            <div class="w3-row-padding w3-center">
                <div class="w3-col m3">
                    <a href="addEvent.php">
                        <img src="w3images/create event.png" style="width: 100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist over the mountains" />
                    </a>
                </div>

                <div class="w3-col m3">
                    <a href="club.php">
                        <img src="w3images/Club Information.png" style="width: 100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffee beans" />
                    </a>
                </div>

                <div class="w3-col m3">
                    <a href="users.php"><img src="w3images/Promote users.png" style="width: 100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Bear closeup" /></a>
                </div>

                <div class="w3-col m3">
                    <img src="w3images/Notification.png" style="width: 100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean" />
                </div>
            </div>
        </div>
        </div>
    </body>

</html>

<?php } else {
    header('location:Scoreboard.php');
} ?>