<!DOCTYPE html>
<html>
<head>
    <title>Toronto Tennis Courts</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script sync defer src="script.js"></script>
</head>
<body>
    <header class="shadow-lg p-3">
        <nav class="navbar-expand-lg navbar navbar-light  newNav ">
                <a href="#" class="navbar-brand"><h2>Toronto Tennis Courts</h2></a>
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"s>Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
        </nav>
        <!-- Modal for contact us-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Contact</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Email: 12345@mail.com
                <br>
                Phone:999-999-9999
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
    </header>
    <!-- <div id="separator">
    What's New
    <hr>
    </div> -->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
            <div class="row">
                <div class="col">
                <a href="http://www.agincourttennisclub.ca" target="_blank" rel="noopener noreferrer">
                    <img src="images/Agincourt Tennis Club.png" class="d-block w-100" alt="Agincourt Tennis Club Logo" title="Visit Agincourt Park website">
                </a>
                </div>
                <div class="col">
                <a href="http://www.nyta.org">
                    <img src="images/Bridlebrook Tennis Club.png" class="d-block w-100" alt="Bridle brook Tennis Club" title="Visit Alamosa Park	">
                </a>
                </div>
                <div class="col">
                <a href="http://www.banburytennisclub.net">
                    <img src="images/Banbury Tennis Club.png" class="d-block w-100" alt="Banbury Tennis Club" title="Visit Banbury Park">
                </a>
                </div>
                <div class="col">
                <a href="http://www.benningtonheightstennis.org">
                    <img src="images/Bennington Heights Tennis Club.png" class="d-block w-100" alt="Bennington Heights Tennis Club" title="Visit Bennington Heights Park">
                </a>
                </div>
                <div class="col">
                <a href="http://www.kewgardenstennis.ca">
                    <img src="images/Beaches Park .png" class="d-block w-100" alt="Beaches Park	" title="Visit Beaches Park">
                </a>
                </div>
            </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
            <div class="row">
                <div class="col">
                <a href="http://www.bellburytennisclub.com">
                    <img src="images/Bellbury.png" class="d-block w-100" alt="Bellbury Park	" title="Visit Bellbury Park">
                </a>
                </div>
                <div class="col">
                <a href="https://www.nywintertennisclub.com/">
                    <img src="images/Bond Park .png" class="d-block w-100" alt="Bond Parl" title="Visit Bond Park">
                </a>
                </div>
                <div class="col">
                <a href="http://www.bridlewoodtennis.ca">
                    <img src="images/Bridlebrook Tennis Club.png" class="d-block w-100" alt="Bridlewood Park" title="Visit Bridlewood Park">
                </a>
                </div>
                <div class="col">
                <a href="http://www.oconnorhillstennis.com">
                    <img src="images/Broadlands Park .png" class="d-block w-100" alt="Broadlands Park" title="Visit Broadlands Park">
                </a>
                </div>
                <div class="col">
                <a href="http://www.pvtc.ca">
                    <img src="images/Cassandra Park .png" class="d-block w-100" alt="Cassandra Park" title="Visit Cassandra Park">
                </a>
                </div>
            </div>
        </div>

        </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- <div class="dropdown" style="background-color:#bde0fe;padding:40px">
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Button with data-bs-target
        </button>
        </p>
        <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                </div>
        </div>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample" style="padding:20px">
            Button with data-bs-target
        </button>
        </p>
        <div class="collapse" id="collapseExample2">
                <div class="card card-body">
                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                </div>
        </div>
        </div> -->
        <div class="container mt-5 " style='
    display: inline-table;margin-left:10px;
}'> 
            <div class="row d-flex flex-wrap"> 
                <div class="col-md-8"> 
                    <div class="btn-group mb-4" role="group" aria-label="Basic radio toggle button group"> 
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked> 
                        <label class="btn btn-outline-primary" for="btnradio1">Table View</label> 
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off"> 
                        <label class="btn btn-outline-primary" for="btnradio2">Card View</label> 
                    </div> 
                </div> 
            </div> 








        <?php 
// Connect to MySQL 
$conn = new mysqli("localhost", "root", "root", "torontoParksNew"); 

// Check connection 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 

// Select query 
$query = "SELECT * FROM tennis_courts_facilities___4326"; 
$result = $conn->query($query); 

// Display data 
if ($result->num_rows > 0) { 
    echo 
    '           
                <div id="tableView"> 
                    <table class="table table-striped"> 
                        <thead> 
                            <tr> 
                                <th>#</th> 
                                <th>ID</th> 
                                <th>Name</th> 
                                <th>Type</th> 
                                <th>Lights</th> 
                                <th>Courts</th> 
                                <th>Phone</th> 
                                <th>Club Name</th> 
                                <th>Club Website</th> 
                                <th>Location Address</th> 
                                <th>Winter Play</th> 
                            </tr> 
                        </thead> 
                        <tbody id="tableBody"> 
                ';

                while($row = $result->fetch_assoc()) {
                    echo 
                    '
                        <tr> 
                            <td>' . $row['_id'] . '</td> 
                            <td>' . $row['ID'] . '</td> 
                            <td>' . $row['Name'] . '</td> 
                            <td>' . $row['Type'] . '</td> 
                            <td>' . $row['Lights'] . '</td> 
                            <td>' . $row['Courts'] . '</td> 
                            <td>' . $row['Phone'] . '</td> 
                            <td>' . $row['ClubName'] . '</td> 
                            <td><a href="' . $row['ClubWebsite'] . '">' . $row['ClubWebsite'] . '</a></td> 
                            <td>' . $row['LocationAddress'] . '</td> 
                            <td>' . $row['WinterPlay'] . '</td> 
                        </tr> 
                        
                    ';
                }

                echo 
                ' 
                        </tbody> 
                    </table> 
                </div> 
                <div id="cardView" style="display: none;"> 
                    <div class="row" id="cardRow"> 
                ';

                $result->data_seek(0); 
                while($row = $result->fetch_assoc()) {
                    echo 
                    '
                        <div class="col-md-2 mb-4"> 
                            <div class="card" style="width: 15rem;"> 
                                <div class="card-body"> 
                                    <h5 class="card-title">' . $row['Name'] . '</h5> 
                                    <p class="card-text">Address: ' . $row['LocationAddress'] . '</p> 
                                    <a href="' . $row['ClubWebsite'] . '" class="btn btn-primary">Visit Club Website</a> 
                                </div> 
                            </div> 
                        </div> 

                    ';
                }
                echo 
                '
                    </div> 
                    </div> 
                        </div>
                            <div class="col-md-4" style="
                                float: right;
                                width: 500px;
                                margin-top: 3rem;">
                                <h2>Right Side Content</h2>
                                <p>This is the right side content.</p>
                            </div>
                        </div>
                    </div>
        ';


} else { 
    echo "0 results"; 
} 

$conn->close(); 
?>
</body>
</html>