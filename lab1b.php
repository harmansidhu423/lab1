<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>movie</title>
</head>
<body>
<h1>saving information....</h1>
<?php
$movie_name =$_POST['movie_name'];
echo 'Movie Name: ' .$movie_name .'<br />';

$lead_actor =$_POST['lead_actor'];
echo 'Lead Actor: ' .$lead_actor .'<br />';

$lead_actress =$_POST['lead_actress'];
echo 'Lead Actress: ' .$lead_actress .'<br />';

$conn = new PDO('mysql:host=aws.computerstudi.es;dbname=gc200358428', 'gc200358428', 'j5SmXe7bDI' );


$sql ="INSERT INTO movie_information(movie_name,lead_actor,lead_actress)
VALUES(:movie_name,:lead_actor,:lead_actress)";


$cmd =$conn->prepare($sql);
$cmd->bindParam(':movie_name',$movie_name, PDO::PARAM_STR,  30);
$cmd->bindParam(':lead_actor',$lead_actor, PDO::PARAM_STR,  30);
$cmd->bindParam(':lead_actress',$lead_actress, PDO::PARAM_STR,  30);

$cmd->execute();

$conn =null;

header('location:lab1c.php');

?>
</body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>