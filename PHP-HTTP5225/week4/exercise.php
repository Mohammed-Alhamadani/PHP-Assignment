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
        <link rel="stylesheet" href="style.css">
    <title>exercise</title>
</head>
<body>
    <header>
        <h1>PhP Class</h1>
    </header>
<table class="table table-sm">
    <thead>
        <tr class="table-primary">
            <th scope="col" class="pad">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th> 
            <th scope="col">Website</th>
        </tr>
    </thead>
        <?php
        // Display user data using a for loop
        for ($i = 0; $i < count($users); $i++) {
            echo "<tr>";
            echo "<td>" . $users[$i]['id'] . "</td>";
            echo "<td>" . $users[$i]['name'] . "</td>";
            echo "<td>" . $users[$i]['username'] . "</td>";
            echo "<td>" . $users[$i]['email'] . "</td>";
            echo "<td>" . $users[$i]['phone'] . "</td>";
            echo "<td>" . $users[$i]['website'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    
</body>
</html>