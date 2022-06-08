<?php
$hostname = "localhost";
$dbname = "Likes";
$username = "postgres";
$pass = "12345678";
$db_conn = pg_connect(" host = $hostname dbname = $dbname user = $username password = $pass ");

if (isset($_POST['submit'])) {
    $fname = $_POST['id'];
    $query = pg_query($db_conn, "DELETE FROM likesA WHERE likesA.id = '$fname'");
    if ( $query ) {
        echo  "Record Successfully Added!";
    }
}
?>

<html>
<body>
<form action="" method="post">
    <input type="number" placeholder="entrez l'id du likes que vous voulez supprimer" name="id">
    <input  type="submit"  name="submit">

</form>
</body>
</html>
