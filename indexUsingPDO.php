<?php

# Requirement: for the PDO stuff to be available, you need to go into the container's CLI and run "docker-php-ext-install pdo pdo_mysql"...
# ...or define a Dockerfile where you do "RUN docker-php-ext-install pdo pdo_mysql"

$host = 'db';         // service name
$dbname = 'php_docker';
$user = 'php_docker';
$password = 'password';

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

$table_name = "php_docker_table";

$query = "SELECT * FROM $table_name";
$stmt = $pdo->query($query);

echo "<strong>$table_name: </strong>";
while($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
    echo "<p>".$row['title']."</p>";
    echo "<p>".$row['body']."</p>";
    echo "<p>".$row['date_created']."</p>";
    echo "<hr>";
}