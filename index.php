<!DOCTYPE html>
<html>
<body>

<?php
  $username = "root";
  $password = "";
  $database = "profiletable";
  $server = "127.0.0.1";

$db_connection = mysqli_connect($server, $username, $password);

$db_found = mysqli_select_db( $db_connection, $database);

if ($db_found) {
    $SQL = "SELECT * FROM hngprofile";
    
    $result = mysqli_query($db_connection, $SQL);
    
    echo "<table>";
    while ($db_row = mysqli_fetch_assoc($result) )
    {
        echo "Name: " .($db_row['firstName']). "<br>";
        echo "Surname: " .($db_row['surName']). "<br>";
        echo "Slack: " .($db_row['slackId']). "<br>";
        echo "Github: " .($db_row['github']). "<br> <br>";

    }
    echo "</table>";
}
 
?>

</body>
</html>
