<?php
$hostname = "localhost";
$dbname = "Likes";
$username = "postgres";
$pass = "12345678";
$db_conn = pg_connect(" host = $hostname dbname = $dbname user = $username password = $pass ");

if (isset($_POST['submit'])) {
    $fname = $_POST['id'];
    $Dname = $_POST['date'];
    $Lname = $_POST['likeby'];

    $query = pg_query($db_conn, "UPDATE likesA SET id = '$fname', date ='$Dname' , likeby = '$Lname' WHERE likesA.id = '$fname';");
    if ( $query ) {
        echo  "un champ a bien ete modifie !!!";
    }
}
?>

<html>
<body>
<form action="" method="post">
    <input type="number" placeholder="entrez l'id du likes que vous voulez modifier" name="id">
    <input type="text" placeholder="entrez la nouvelle date" name="date">
    <input type="text" placeholder="modifiez le nom de celui qui like" name="likeby">
    <input  type="submit"  name="submit">

</form>
</body>
</html>
