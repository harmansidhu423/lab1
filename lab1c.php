<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


</head>
<body>

<?php
//step 1- connect to the database
$conn = new PDO('mysql:host=aws.computerstudi.es;dbname=gc200358428', 'gc200358428', 'j5SmXe7bDI' );

//step-2 create the sql command
$sql= "SELECT * FROM movie_information";

// step-3 prepare the sql command(prevent sql injection)
$cmd = $conn->prepare($sql);

// step-4 execute the command
$cmd->execute();

//step-5 store the results
$movie_information =$cmd->fetchAll();

//step-6 remove the DB connection
$conn = null;

//step-7 loop over the results and display them to the screen

echo '<table class="table table-striped table-hover">
<tr><th>Movie Name</th>
<th>Lead Actor</th>
<th>Lead Actress</th></tr>';


foreach($movie_information as $Movie)
{
    echo '<tr><td>'.$Movie['movie_name'].'</td>
    <td>'.$Movie['lead_actor'].'</td>
    <td>'.$Movie['lead_actress'].'</td></td>';


}
echo '</table>';
?>


</body>
</html>