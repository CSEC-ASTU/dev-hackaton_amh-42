<!DOCTYPE html>
<html>

<head>
    <title>Title</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="plugins/CSS/w3.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway" />
    <link rel="" href="style.css" />
    <?php
    require('database/function.php');
    ?>

</head>

<body class="w3-light-grey">
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

    <!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
    <div class="w3-content" style="max-width: 1400px">
        <!-- Header -->
        <header class="w3-container w3-center w3-padding-32">
            <h1><b>CPD Scoreboard</b></h1>
            <p>Welcome to the Scoreboard of <span class="w3-tag">CPD</span></p>
        </header>
        <?php
        $product_shuffle = getData();
        ?>
        <!-- Grid -->
        <div class="w3-row">
            <!-- Blog entries -->
            <div class="w3-col 20 s12">
                <!-- Blog entry -->
                <?php foreach ($product_shuffle as $item) { ?>
                    <div class="w3-card-4 w3-margin w3-white">
                        <img src="<?php echo $item['event_image']; ?>" alt="Nature" style="width: 100%" />
                        <div class="w3-container">
                            <h3>
                                <b><?php echo $item['event_id']; ?></b>
                            </h3>
                            <h5>
                                <?php echo $item['event_title']; ?>, <span class="w3-opacity"><?php echo $item['event_addDate'] ?></span>
                            </h5>
                        </div>

                        <div class="w3-container">
                            <p>
                                <?php echo $item['event_description'] ?>
                            </p>
                            <div class="w3-row">
                                <div class="w3-col m8 s12">
                                    <p>
                                        <button class="w3-button w3-padding-large w3-white w3-border">
                                            <b>👍</b>
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                <?php } ?>
            </div>

            <!-- Introduction menu -->

            <!-- END GRID -->
        </div>
        <br />

        <!-- END w3-content -->
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
        <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">
            Previous
        </button>
        <button class="w3-button w3-black w3-padding-large w3-margin-bottom">
            Next »
        </button>
        <p>
            Powered by
            <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">AMH-42</a>
        </p>
    </footer>
</body>

</html>