<!-- NavBar-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add SB</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="plugins/CSS/w3.css" />
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="plugins/dist/css/adminlte.min.css" />
    <link rel="stylesheet" href="style.css" />
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
    <!-- Add Event -->
    <div class="register">
        <form action="" method="POST" autocomplete="off">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Contest id</label>
                    <input type="text" class="form-control" id="Eventid" placeholder="Enter Contest id" />
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Contest Week</label>
                    <input type="text" class="form-control" id="EventTitle" placeholder="Enter Contest Week" />
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contest Division</label>
                    <input type="text" class="form-control" id="EventDescription" placeholder="Division" />
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Choose Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="InputeImage" />
                            <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>

                <?php
                include('database/DBConnector.php');
                $con = connect_db();
                $sql = "SELECT * FROM division_members WHERE division_id = 2";
                $resultArray = array();


                ?>
                <label for="1st">1st Place</label>
                <select class="custom-select form-control-border border-width-2" id="1st" onclick="">
                    <?php
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    ?>
                        <option><?php echo $row["full_name"]; ?></option><?php } ?>
                </select>
                <label for="1st">2nd Place</label>
                <select class="custom-select form-control-border border-width-2" id="2nd" onclick="">
                    <?php
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    ?>
                        <option><?php echo $row["full_name"]; ?></option><?php } ?>
                </select>
                <label for="1st">3rd Place</label>
                <select class="custom-select form-control-border border-width-2" id="3rd" onclick="">
                    <?php
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    ?>
                        <option><?php echo $row["full_name"]; ?></option><?php } ?>
                </select>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary ">Create</button>
                </div>
        </form>
    </div>
</body>

</html>