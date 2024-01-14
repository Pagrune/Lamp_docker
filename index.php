<?php

// connect to mysql with pdo
$pdo = new PDO('mysql:host=db;dbname=lamp_docker', 'lamp_docker', 'user');

// query
$query = 'SELECT * FROM blog';

// execute query
$result = $pdo->query($query);

// display results
echo '<h1>Blog</h1>';

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo '<h2>' . $row['title'] . '</h2>';
    echo '<p>' . $row['content'] . '</p>';
    echo 'Posté le : '.$row['date'];
    echo '<hr>';
}


// $connect = mysqli_connect(
//     'db',
//     'lamp_docker',
//     'user',
//     'lamp_docker'
// );

// $query = 'SELECT * FROM blog';
// $result = mysqli_query($connect, $query);


// echo '<h1>Blog</h1>';

// while ($row = mysqli_fetch_assoc($result)) {
//     echo '<h2>' . $row['title'] . '</h2>';
//     echo '<p>' . $row['content'] . '</p>';
//     echo 'Posté le : '.$row['date'];
//     echo '<hr>';
// }