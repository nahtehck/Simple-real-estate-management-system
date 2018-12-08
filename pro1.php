<?php
$db = mysqli_connect('localhost','root','','realestate') or die('Error connecting to MySQL server.');
$name=$_POST["name"];
$email=$_POST["email"];

$q = "select email from subs where email='$email'";
$q1=mysqli_query($db, $q) or die('Error querying database.');
if (mysqli_num_rows($q1) != 0){
	echo "<script type='text/javascript'>alert('The same email has already subscribed with us!! Enter a different email !!');</script>";
	echo '<script type="text/javascript">window.location= "index.html"</script>';
}
$query = "insert into subs(name,email) values('$name','$email')";
mysqli_query($db, $query) or die('Error querying database.');
echo "<script type='text/javascript'>alert('Thank You!! You have successfully subscribed with us!!');</script>";
echo '<script type="text/javascript">window.location= "index.html"</script>';
?>