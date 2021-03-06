<!DOCTYPE html>
<html>

<head>
    <title>Events</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="plugins/CSS/w3.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway" />
    <link rel="stylesheet" href="style.css" />
    <?php
    include('database/Event.php');
    ?>
</head>

<body>
    <div class="w3-top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card">
            <a href="#home" class="w3-bar-item w3-button"><b>CSEC</b> ASTU</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                <a href="#projects" class="w3-bar-item w3-button">CPD</a>
                <a href="#about" class="w3-bar-item w3-button">Dev</a>
                <a href="#contact" class="w3-bar-item w3-button">Contact</a>
            </div>
        </div>
    </div>

    <!-- Event -->
    <div class="events-handler">
        <?php
        $product_shuffle = getData('event');
        ?>
        <?php foreach ($product_shuffle as $item) { ?>
            <div class="w3-row">
                <!-- Blog entries -->

                <div class="w3-col 18 s5">
                    <!-- Blog entry -->
                    <div class="w3-card-4 w3-margin w3-white">
                        <img src="<?php echo $item['event_image']; ?>" alt="Nature" style="width: 100%" />
                        <div class="w3-container">
                            <h3>
                                <b><?php echo $item['event_title']; ?></b>
                            </h3>
                            <h5>
                                <?php echo $item['event_description']; ?>, <span class="w3-opacity"><?php echo $item['event_addDate']; ?></span>
                            </h5>
                        </div>
                        <div class="w3-container">
                            <p>
                                🥇 Andalus <br />
                                🥈 Bug-Hunters<br />
                                🥉 Sansolvers
                            </p>
                            <div class="w3-row">
                                <div class="w3-col m8 s12">
                                    <p>
                                        <button class="w3-button w3-padding-large w3-white w3-border">
                                            <b>Register >></b>
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />

                </div>
            <?php } ?>
            </div>

    </div>
</body>

</html>