<?php
$hostname = "localhost";
$dbname = "likes";
$username = "postgres";
$pass = "12345678";
$db_conn = pg_connect(" host = $hostname dbname = $dbname user = $username password = $pass ");

if (isset($_POST['submit'])) {
    $fname = $_POST['id'];
    $lname = $_POST['lastname'];

    $query = pg_query($db_conn, "INSERT  INTO likesa(id,date, likeby) VALUES ('$fname',NOW(),'$lname');");
    if ( $query ) {
        echo  "Record Successfully Added!";
    }
}


?>
<!DOCTYPE  html>
<html>
<body>
<h2>PostgreSQL Insert Forms</h2>

<form  method="POST"  action="">
    id du like :<br>
    <input label="entrez l id du like" type="number"  name="id">
    <br>
    Liké par :<br>
    <input label="entrez le nom" type="text"  name="lastname">
    <br><br>
    <input  type="submit"  name="submit">
</form>
</body>
</html>

