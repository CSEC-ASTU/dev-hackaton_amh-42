<!-- NavBar-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Events</title>
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
        <form action="event_add.php" method="POST" autocomplete="off">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Event Title</label>
                    <input type="text" class="form-control" id="EventTitle" placeholder="Enter Event Title" name="title" />
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Event Description</label>
                    <input type="text" class="form-control" id="EventDescription" placeholder="Description" name="description" />
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Choose Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" />
                            <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <select class="custom-select form-control-border border-width-2" name="division">
                    <option>CPD</option>
                    <option>Dev</option>
                    <option>CBD</option>
                </select>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary ">Create</button>
                </div>
        </form>
    </div>
</body>

</html>