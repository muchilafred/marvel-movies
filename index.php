<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marvel Movies</title>
</head>
<body>
<header>
    <h1>Marvel Movies</h1>
</header>
<main>
        <?
        include 'dbconnect.php';
        print " dbhost - ".$connectstr_dbhost."<br>";
        print " dbname- ".$connectstr_dbname."<br>";
        print " dbusername- ".$connectstr_dbusername."<br>";
        print " dbpassword- ".$connectstr_dbpassword."<br>";
        ?>
        <p><a href="movie list.php">All Marvel Movies</a></p>
        <p><a href="xmen.php">All X-MEN Movies</a></p>
        <p><a href="dbConnect.php">dbC30Aonnect</a></p>



</main>
<footer>
</footer>
</body>
</html>