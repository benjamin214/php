<html>
<head>

<header>
 <h2>Friend book</h2>
</header>



<style>

/* Style the header */
header {
 background-color: #666;
 padding: 30px;
 text-align: center;
 font-size: 35px;
 color: white;
}
/* Style the footer */
footer {
 background-color: #777;
 padding: 10px;
 text-align: center;
 color: white;
}
</style>
</head>


<body>

<form action="index.php" method="post">
Name: <input type="text" name="name">
<input type="submit">
</form>

<?php
echo "<h1>My best friend: </h1>";
if (isset($_POST['name'])) {
 $name = $_POST['name'];
}
$filename = 'newfile.txt';
echo file_get_contents($filename);
$file = fopen( $filename, "a+" );
if( $file != false ) {
 echo "<b>$name</b><br>";
 fwrite( $file, "$name\n" );
 fclose( $file );
}

?>

</body>

<footer>
 <p>Footer</p>
</footer>
</html>
