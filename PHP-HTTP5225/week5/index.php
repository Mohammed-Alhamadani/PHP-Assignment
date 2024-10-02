
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Colors Database</title>
</head>
<body>
    <?php
    $host = '127.0.0.1';
    $user = 'root';
    $password = 'root';
    $db = 'PHPdataBase';
    $port = 8889;

    $connect = mysqli_connect($host, $user, $password, $db, $port);

    if (!$connect) {
        echo 'Error Code: ' . mysqli_connect_errno();
        echo '<br>Error Message: ' . mysqli_connect_error();
        exit();
    } else {
        echo "Connection to the database Successful<br>";
    }

    $query = 'SELECT `Name`, `Hex` FROM colors';
    $result = mysqli_query($connect, $query);

    if (!$result) {
        echo 'Error: ' . mysqli_error($connect);
    } else {
        echo 'The query found: ' . mysqli_num_rows($result) . " rows<br>";
    }
    ?>
    <table class="table table-sm">
    <thead >
        <tr class="table-primary" >
            <th scope="col">Name</th>
            <th scope="col">Hex Code</th>
        </tr>
    </thead>
        <?php
        // Display user data using a for loop
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td style='background-color: " . $row['Hex'] . "'>" . $row['Hex'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <?php
    // Close database connection
    mysqli_close($connect);
    ?>
</body>
</html>