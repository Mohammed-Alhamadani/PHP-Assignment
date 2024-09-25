<?php


// Function to fetch user data from the JSONPlaceholder API
function getUsers() {
$url = "https://jsonplaceholder.typicode.com/users";
$data = file_get_contents($url);
return json_decode($data, true);
}
// Get the list of users
$users = getUsers();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
        <?php
    for ($i = 0; $i < count($users); $i++) {
        echo '<div class="card col-md-3 m-1" class="text-primary-emphasis">
            <div class="card-body">
            <img src="..." class="card-img-top" alt="...">
                <h5 class="card-title">' . $users[$i]['name'] . '</h5>
                <p class="card-text">' . $users[$i]['username'] . '</p>
                <p class="card-text">' . $users[$i]['email'] . '</p>
                <p class="card-text">' . $users[$i]['phone'] . '</p>
                <p class="card-text">' . $users[$i]['website'] . '</p>
                <a href="#" class="btn btn-primary">Visit Website</a>
            </div>
        </div>';
}
?>
        </div>
    </div>

</body>
</html>

